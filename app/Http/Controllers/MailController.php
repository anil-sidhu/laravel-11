<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    //
    function sendEmail(){
        $to="anil.kumar.vidz@gmail.com";
        $msg="dummy text by code step by step channel";
        $subject="Code Step By Step";
        Mail::to($to)->send(new WelcomeMail($msg,$subject));
        return "send Email";
    }
}
