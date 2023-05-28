<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadform(){
        return view('upload');
    }


    public function doupload(Request $request){

        $request->validate([
            'fileInput' => 'required|mimes:pdf,word'
        ]);
        $file= $request->file('fileInput');
        $filename=uniqid().'____'.$file->getClientOriginalName();
   $file->move(public_path().'/uploads',$filename);

        return back()
            ->with('success','فایل با موفقیت بارگذاری شد.')
            ->with('newFileName',$filename);


           
            redirect('dashboard');
    



    }
}
