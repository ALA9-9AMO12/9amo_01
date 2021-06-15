<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function contactMail (){
          $email = request('email');
          $voornaam = request('voornaam');
          $message = request('message');

          Mail::to($email);
          Mail::send($email);

        return(view('contact'));
    }
}
