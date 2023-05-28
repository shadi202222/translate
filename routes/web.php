<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use  Illuminate\Http\Request;
use App\Http\Middleware\TestMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel', '\App\Http\Controllers\PanelController@render');

Route::get('/dashboard', function () {
    return view('home1');
});

Route::get('/register1','\App\Http\Controllers\UserController@register');
Route::post('/login-user','\App\Http\Controllers\UserController@store');

Route::get('/login1', function () {
    return view('login1');
});

Route::post('/login1','\App\Http\Controllers\loginController@login');

Route::get('/mail/send', [\App\Http\Controllers\SendMailController::class ,'sendmail']);


Route::get('/upload1',[\App\Http\Controllers\UploadController ::class,'uploadform']);

Route::post('/upload1',[\App\Http\Controllers\UploadController::class,'doupload']);


Route::get('/admin-show', function () {
    $records= DB::table('users')->get();
   return view('listadmin',["users"=>$records]);
});

Route::delete('/login-delete/{userID}',function ($userID) {
    $user =User::find($userID);
 
         $user->delete();
 
 
   Session:: flash('message','رکورد حدف شد.');
     return  redirect('/admin-show');
 });
 
Route::post('/edit/{userID}',function ($userID) {
    $user =User::find($userID);
    return view('edit')->with('user',$user);

});
Route::put('/update/{useID}',function ( Request $request,$userID) {
    $user =User::find($userID);
    $user->username = $request->username;
    $user->email=    $request->email;
    $user->password=  $request->password;
    $user->save();
    Session:: flash('message','رکورد ویرایش  شد.');
   
    return redirect('/admin-show');

});

Route::get('/sefaresh', function () {
    return view('sefaresh');
});
Route::post('/sefaresh1','\App\Http\Controllers\SefareshController@store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
