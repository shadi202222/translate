<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;


class UserController extends Controller

{
    public function register()
    {
        return view('register');

    }
    public function store(Request $request){
        $validate=Validator::make(request()->all(),[
            
            'email'=>'required',
            'phone'=>'required',
            'username'=>'required|string',
          'password'=>'required|string',
          
           
        ],
            [
                'email.required'=>'ایمیل باید وارد شود',
                'phone.required'=>'شماره مویابل  باید وارد شود',
                'username.required'=>'نام کاربری  باید وارد شود',
                'password.required'=>'کلمه عبور باید واردشود ',
               

            ]
        );

        if($validate->fails()){
            return redirect()->back()
                ->withErrors($validate)
                ->withInput(request()->all());

        }








        $article= User ::create(


            [
                'firstname'=>request('firstname'),
                'lastname'=>request('lastname'),
                'email'=>request('email'),
                'phone'=>request('phone'),
                'username'=>request('username'),
                'password'=>request('password'),
              


            ]

        );
        redirect('dashboard');

        




    //    $user_info = DB::table('users')->where('firstname', request('firstname'))->first();

       //  $to = $user_info->email

      //  return redirect('/panel')->with(['info' => $user_info]);


            if($article){
                 Session::flash('message','اطلاغات ثبت شد.');
                 return redirect('/dashboard');

             }

    }
     

}