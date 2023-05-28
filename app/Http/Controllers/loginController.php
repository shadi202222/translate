<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Input;


use Illuminate\Support\Facades\Session;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login (Request $request)
        {
            $national = $request->input('username');
            $student = $request->input('password');
    
            $user = \DB::table('users')->where('username', $national)->first();
            $user2 = \DB::table('users')->where('password', $student)->first();
    
    
            if ($user && $user2) {
                // Login successful
              

                $user_info = \DB::table('users')->where('username', request('username'))->first();

        // $to = $user_info->email

        return redirect('/panel')->with(['info' => $user_info]);


            } else {
                // Login failed
                return redirect()->back()->withErrors(['username' => 'نام کاربری اشتیاه است']);
            }

        }
    }
