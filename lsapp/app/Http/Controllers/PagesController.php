<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
    	$title = 'home';


        $posts = Post::orderBy('created_at','desc')->paginate(3);
        return view('pages.index')->with('posts', $posts)->with('title',$title);
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
        return view('pages.alunos')->with('title',$title);
    }


    public function formularios(){
        $title ='formularios';
        return view('pages.formularios')->with('title',$title);
    }

    public function bolsas(){
        $title ='bolsas';
        return view('pages.bolsas')->with('title',$title);
    }

    public function editais(){
        $title ='editais';
        return view('pages.editais')->with('title',$title);
    }

    public function doutorado(){
        $title ='doutorado';
        return view('pages.doutorado')->with('title',$title);
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
        return view('pages.revista')->with('title',$title);
    }

    public function noticias(){
        $title ='noticias';
        return view('pages.noticias')->with('title',$title);
    }

}