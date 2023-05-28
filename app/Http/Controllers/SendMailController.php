<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\MyTestEmail;




// ...



// ...




use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendmail(){
        $to = 'shady.haryry@gmail.com';
        $fromAddress= 'admin@mysite.com';
       // $subject='پیام عضویت ';
        $body='عضویت شمادر سایت با موفقیت انحام شد';
        $fullname='شادی حریری';
        $username='shadi';

        if(Mail::to($to)->send(new MyTestEmail($fromAddress,$fullname,$username,$body)))
        return "<h2>ایمیل ارسال گردید</h2>";  
        else return "<h2>ایمیل ارسال نگردید</h2>";

   }
}
