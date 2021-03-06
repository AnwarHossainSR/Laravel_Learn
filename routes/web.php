<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\storeUserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('users',[UserController::class,'index']);

Route::get('userdata',[UserController::class,'getData']);

Route::view('login', 'person');
Route::post('personApi',[PersonController::class,'ApiRequestExample']);

Route::view('userlogin', 'login');
Route::view('profile', 'profile');

Route::post('user',[UserAuthController::class,'SessionExample']);
Route::get('/logout', function () {
    if(session()->has('username'))
    {
        session()->pull('username',null);
    }
    return redirect('login');
});

Route::view('storeuser', 'storeUsers');
Route::post('storeUserData',[storeUserController::class,'addMember']);
Route::view('upload', 'upload');
Route::post('upload',[UploadController::class,'uploadFile']);
Route::view('localization', 'localization');
//Route::get('/localization/{lang}', function ($lang) {
//    App::setlocale($lang);
//    return view('localization');
//});

Route::view('add', 'addMember');
Route::post('add',[MemberController::class,'addData']);
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('edit/{id}',[MemberController::class,'showData']);
Route::post('edit',[MemberController::class,'update']);