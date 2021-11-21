<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class PasswordUpdateComponent extends Component
{

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'password' => 'required|4',
            'new_password' => 'required|4',
        ]);
    }

    public function storeinfo()
    {
        $this->validate([
            'password' => 'required|4',
            'new_password' => 'required|4'
        ]);

        session()->flash('message',"Saved successfully" );

    }
    public function render()
    {
        return view('livewire.user.password-update-component');
    }
}
