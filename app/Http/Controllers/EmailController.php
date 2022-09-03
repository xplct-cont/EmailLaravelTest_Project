<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{


    public function __construct()
    {
       
    }



    public function sendEmail(Request $request){
            $request->validate([
                'email' => 'required|email',
                'subject' => 'required|string',
                'content' => 'required|string'
            ]);


            Mail::send('email', ['content' => $request->content, 'subject' => $request->subject], function($mails) use($request){
                $mails->to($request->email);
                $mails->subject($request->subject);
            });
            return "Email has been sent successfully!";
    }
}
