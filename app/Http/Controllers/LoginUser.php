<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usertodo;
use App\Models\UserLogin;
use App\Http\Controllers\LoginUser;



use Illuminate\Support\Facades\DB;

class LoginUser extends Controller
{
    //
    function Login(Request $log)
    {
        // get user entery
       

        $userEntery =  $log->input(); 
        $username =  $userEntery['username'];
        $password =  $userEntery['password'];
        
        $user = DB::table('userlogins')->where('username',$username)->first();
        if($user){
            
            $nameUser=  $user->username;
            $pass = $user->password;
            $id = $user->id;

        if($nameUser === $username && $pass===$password){

            $log->session()->put('name', $username);
            $log->session()->put('id', $id);
            return redirect('todos');}
        else{
            
            return redirect('/')->with('status', 'Invalied detail');
        }
        }
        else{
            return redirect('/')->with('status', 'Invalied detail');
        }
        
    }

    function Todoentry (Request $entry) {
        $entry->validate(
            ["todolist"=>"required"]
        );

        $addtodo = new Usertodo;
        $addtodo->foregink=$entry->foregink;
        $addtodo->todolist=$entry->todolist;
        $addtodo->save();
        return redirect('todos');
    }

    function GetData (Request $dataTodo) {
        $names = session('id');
        $usertodo = DB::table('usertodos')->where('foregink', $names)->get();
        return view ('todo', ['todoss'=> $usertodo]);
    }

    function Todouser (Request $todouser) {
        $todouser->validate(
            ["password"=>"required | min:6"]
        );

        $users = new UserLogin;
        $users->username=$todouser->username;
        $users->password=$todouser->password;
        $users->email=$todouser->email;
        $users->save();
        return redirect('/');
    }

    function Delete(Request $IdSelect) {
        $deleteSelect =  $IdSelect->input(); 
        $idSelect =  $deleteSelect['idSele'];
        $dauser =  Usertodo::find($idSelect);
        $dauser->delete();
        return redirect('todos');
    }

} 

