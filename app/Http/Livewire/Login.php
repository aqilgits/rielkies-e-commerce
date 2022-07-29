<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function login()
    {
        return view('livewire.login',["message"=>""]);
    }

}
