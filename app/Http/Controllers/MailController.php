<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\BadResponseException;
class MailController extends Controller
{
    //
 
    public function sendmail(){
    mail::to('hebaalielsayed35@yahoo.com')->send(new test1);    

        
      
    //    dd('okىىىىىىىىىىىىىىىىىىىىىىىىىى');
    }
}