<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoggedOutComponent extends Component
{
    public function render()
    {
        return view('livewire.logged-out-component');
    }
}
