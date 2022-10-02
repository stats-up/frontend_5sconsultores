<?php

namespace App\Http\Controllers;

use App\Mail\MailStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class GlobalController extends Controller
{
    public function logout(){
        Session::flush();
        return redirect('/');
    }
    public function sendEmail(Request $request){
        if(Session::has('user')){
            $to = "";
            Mail::to($to)->queue(new MailStructure($title,$message));
        }
    }
    public function generar_hash(Request $request){
        $gets = $request->input();
        dd(Hash::make($gets["password"]));
    }
}
