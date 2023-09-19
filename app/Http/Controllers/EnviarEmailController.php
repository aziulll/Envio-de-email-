<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarEmailController extends Controller
{
    public function enviarEmail(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $mensagem = $request->input('mensagem');

        // Envie o email
        Mail::to($email)
        ->send(new HelloMail($mensagem, $nome));
                 
        
        return view('welcome');
    }
}

