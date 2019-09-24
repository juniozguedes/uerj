<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'message' => 'required'
    	]);
    	$data = array(
    		'name' => $request->name,
    		'message' => $request->message,
    		'email' => $request->email
    	);

    	Mail::to('seu-email@gmail.com')->send( new SendMail($data)); //E-mail que vai RECEBER a mensagem na inbox
    	return back()->with('sucess', 'Obrigado pelo contato!');
    }
}
