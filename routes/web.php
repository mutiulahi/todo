<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUser;

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
    return view('login');
});

Route::post('logins', [LoginUser::class, 'Login']);

Route::get('todos',[LoginUser::class, 'GetData']);

// Route::post('delete', [LoginUser::class, 'Delete']);
Route::post('todoDelete',[LoginUser::class, 'Delete']);

Route::post('add', [LoginUser::class, 'Todoentry']);

Route::get('register', function () {
    return view('register');
});

Route::post('registered',[LoginUser::class, 'Todouser']);



Route::get('/todo',function(){
    if(session()->has('name')){
        return view('todo');
    }
    return redirect('/');
});

Route::get('/logout', function(){
    if (session()->has('name')) {
        session()->pull('name');
        return redirect('/');
    }
});
