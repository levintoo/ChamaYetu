<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SavingsComponent extends Component
{
    public function render()
    {
        return view('livewire.savings-component')->layout('layouts.dashboard');
    }
}
