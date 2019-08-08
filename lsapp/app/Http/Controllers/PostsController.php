<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use DB;

class PostsController extends Controller
{
    
    /*Adiciona um construtor inferindo o auth, ao lado setamos exceções de onde o Usuário pode ver os posts */
     public function __construct()
    {
        #this->middleware('auth')->except(['index', 'show']);
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //$posts = Post::orderBy('title','asc')->get();
        //$post = Post::where('title','Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        $title = 'none';
        return view('posts.index')->with('posts', $posts)->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'none';
        return view('posts.create')->with('title',$title);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'filename' => 'nullable',
            'tag' => 'nullable'
            ]);

        //File

        if($request->hasFile('filename')){
            //Get filename with the extension
            $filenameWithExt = $request->file('filename')->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just ext
            $extension = $request->file('filename')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('filename')->storeAs('public/files', $fileNameToStore);

        } else {
            $fileNameToStore = 'none';
        }

        //Check for tag and Create Post
        $post = new Post;

        if ($request->input('tag') !== null) {
            $post->tag = $request->input('tag');
        }   

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->filename = $fileNameToStore;
        $post->save();
        $title = 'none';

        return redirect('/posts')->with('sucess','Post Created')->with('title',$title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*Podemos passar via array como $data ou via corrente como eu fiz
        $data = [
            'post'  => Post::find($id);,
            'uid'   => Auth::id();
            ];*/
        $post = Post::find($id);
        $uid = Auth::id();
        $title = 'none';
        return view('posts.show')->with('post', $post)->with('uid',$uid)->with('title',$title);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $uid = Auth::id();
        if ($uid !== $post->user_id){
            return redirect('/dashboard');    
        }

        $title = 'none';
        return view('posts.edit')->with('post', $post)->with('title',$title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            ]);


        //File

        if($request->hasFile('filename')){
            //Get filename with the extension
            $filenameWithExt = $request->file('filename')->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just ext
            $extension = $request->file('filename')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('filename')->storeAs('public/files', $fileNameToStore);

        } else {
            $fileNameToStore = 'none';
        }

        //Check for tag and Create Post
        $post = Post::find($id);

        if ($request->input('tag') !== null) {
            $post->tag = $request->input('tag');
        }   

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->filename = $fileNameToStore;
        $post->save();
        $title = 'none';

        return redirect('/posts')->with('sucess','Postagem Atualizada!')->with('title',$title);

        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (Auth::id() !== $post->user_id){
            return redirect('/dashboard');    
        }
        $post->delete();        
        return redirect('/dashboard')->with('sucess','Postagem Deletada!');

    }
}
