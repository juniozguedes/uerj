<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Pdf;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $posts = Post::orderBy('created_at','desc')->paginate(5);
        $pdfs = Pdf::orderBy('created_at','desc')->paginate(5);


        /*
        Maxim B
        1 ano atrás
        Was having trouble with pagination on dashboard, but this is how it worked for me:
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->posts()->paginate(10);*/

        $title = 'none';

        //return view('dashboard')->with('posts',$user->$posts)->with('pdfs',$pdfs)->with('title',$title); //Check model User! The function posts inside the model return the posts that belongs to this user
        return view('dashboard')->with('posts',$posts)->with('pdfs',$pdfs)->with('title',$title); //Check model User! The function posts inside the model return the posts that belongs to this user
    }
}
