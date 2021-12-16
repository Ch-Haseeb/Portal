<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;


class emailcontroller extends Controller
{
    function send(Request $request)
    {
        $mail=$request->mail;

        $data = array(
            'name'      =>  $request->name,
            'to'        =>   $request->email,
            'message'   =>   $request->message
        );

     Mail::to($data['to'])->send(new MyTestMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
