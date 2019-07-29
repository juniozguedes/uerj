<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome To Laravel';


        $posts = Post::orderBy('created_at','desc')->paginate(3);
        return view('pages.index')->with('posts', $posts)->with('title',$title);
        //return view('pages.index', compact('title'));

    }


    public function about(){
    	$title = 'Welcome to about';
    	return view('pages.about')->with('title',$title);
    }


    public function services(){
    	$data = array(
    		'title'=>'Services',
    		'services' => ['Web Design', 'Programming', 'Test']
    	);

    	return view('pages.services')->with($data);
    }

}
