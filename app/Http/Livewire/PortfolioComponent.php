<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PortfolioComponent extends Component
{
    public function render()
    {
        return view('livewire.portfolio-component')->layout('layouts.base');
    }
}
