<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pdf;
use DB;

class PdfsController extends Controller
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
        $posts = Post::orderBy('created_at','desc')->paginate(8);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdfs.create');
        
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
            'filename' => 'required'
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



        //Create Pdf

        $pdf = new Pdf;
        $pdf->filename = $fileNameToStore;
        $pdf->save();

        return redirect('/dashboard')->with('sucess','Pdf Cadastrado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pdf = Pdf::find($id);
        $pdf->delete();        
        return redirect('/dashboard')->with('sucess','Pdf Deletado!');

    }
}