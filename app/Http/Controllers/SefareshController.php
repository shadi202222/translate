<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Models\Taskcustomer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class SefareshController extends Controller
{
    public function store(Request $request){
        $validate=Validator::make(request()->all(),[
            
            'languageorgin'=>'required',
           'title'=>'required',
           
          'specialist'=>'required|string',
          'numbertranslate'=>'required',
          'uploadpath'=>'required',
          
           
        ],
            [
                'specialist.required'=>'رشته تخصصی حتما باید ذکر شود',
                'languageorgin.required'=>'زبان مبدا و زبان مقصد باید تعیین شود',
                'numbertranslate.required'=>'شماره مترجم باید وارد بشود',
                
               

            ]
        );

        $file= $request->file('uploadpath');
        $filename=uniqid().'____'.$file->getClientOriginalName();
         $file->move(public_path().'/uploads',$filename);


       
        if($validate->fails()){
            return redirect()->back()
                ->withErrors($validate)
                ->withInput(request()->all());

        }
        

   

      //$publicpath = $request->file('publicpath')->move(public_path(),'/uploads');


//if(request()->hasfile('uploadpath')){
           // $avatarName = time().'.'.request()->uploadpath->getClientOriginalExtension();
            //request()->uploadpath->move(public_path('uploads'), $avatarName);
       // }



        $sefaresh= Taskcustomer ::create(
           


            [
                'title'=>request('title'),
               'comment'=>request('comment'),
                'languageorgin'=>request('languageorgin'),
               'specialist'=>request('specialist'),
               'numbertranslate'=>request('numbertranslate'),
                    
                
              


            ]

        );
        redirect('dashboard');

        if( $sefaresh){
            Session::flash('message','اطلاغات ثبت شد.');
            return redirect('/upload1');

        }

}
}
