<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserController extends Component
{
    function userLogin(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            $error = "Username or password is wrong";
            return view('livewire.login',["message"=>$error]);
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
