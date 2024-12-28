<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    //
    function sendEmail(Request $request){
        $to=$request->to;
        $msg=$request->message;
        $subject=$request->subject.(string)rand();
        for($i=0;$i<100;$i++){
            Mail::to($to)->send(new WelcomeMail($msg,$subject));
echo "send";
        }
        return " Email Sent";
    }
}
