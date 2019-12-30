<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class PagesController extends Controller
{
    public function index(){
        $locale = app()->getLocale();
    	$title = 'home';
        $posts = Post::orderBy('created_at','desc')->where('tag','none')->paginate(3);
        return view('pages.index')->with('posts', $posts)->with('title',$title)->with('locale',$locale);
        //return view('pages.index', compact('title'));

    }


    public function programa(){
        $title = 'programa';
    	return view('pages.programa')->with('title',$title);
    }


    public function docente(){
    	$title ='docente';
    	return view('pages.docente')->with('title',$title);
    }


    public function pesquisa(){
        $title ='pesquisa';
        return view('pages.pesquisa')->with('title',$title);
    }

    public function alunos(){
        $title ='alunos';

        $posts = Post::where('tag','alunos')->get();
        return view('pages.alunos')->with('title',$title)->with('posts',$posts);
    }


    public function formularios(){
        $title ='formularios';

        $posts = Post::where('tag','formularios')->get();

        return view('pages.formularios')->with('title',$title)->with('posts',$posts);
    }

    public function bolsas(){
        $title ='bolsas';
        $posts = Post::where('tag','bolsas')->get();
        return view('pages.bolsas')->with('title',$title)->with('posts',$posts);
    }

    public function editais(){
        $title ='editais';
        $posts = Post::where('tag','editais')->get();
        return view('pages.editais')->with('title',$title)->with('posts',$posts);
    }

    public function doutorado(){
        $title ='doutorado';
        $posts = Post::where('tag','doutorado')->get();
        return view('pages.doutorado')->with('title',$title)->with('posts',$posts);
    }

    public function capes(){
        $title ='capes';
        return view('pages.capes')->with('title',$title);
    }

    public function contato(){
        $title ='contato';
        return view('pages.contato')->with('title',$title);
    }

    public function revista(){
        $title ='revista';
        $posts = Post::where('tag','revista')->get();
        return view('pages.revista')->with('title',$title)->with('posts',$posts);
    }

    public function noticias(){
        $locale = app()->getLocale();
        $title ='noticias';
        $posts = Post::orderBy('created_at','desc')->where('tag','none')->get();
        return view('pages.noticias')->with('posts', $posts)->with('title',$title)->with('locale',$locale);
    }

}