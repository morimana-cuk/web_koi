<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LogoutButton extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); 
    }

    public function render()
    {
        return view('livewire.components.logout-button');
    }
}
