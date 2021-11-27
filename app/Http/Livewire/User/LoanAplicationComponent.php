<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class LoanAplicationComponent extends Component
{
    public function render()
    {
        return view('livewire.user.loan-aplication-component')->layout('layouts.dashboard');
    }
}
