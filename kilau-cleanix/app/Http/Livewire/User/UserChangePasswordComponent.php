<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;


    public function changePassword()
    {

    }
    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
