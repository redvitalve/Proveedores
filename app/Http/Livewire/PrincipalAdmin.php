<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrincipalAdmin extends Component
{
    public function render()
    {
        return view('livewire.principal-admin')
        ->layout('layouts.admin');
    }
}
