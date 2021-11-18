<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class MailboxComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.mailbox-component')->layout('layouts.dashboard');
    }
}
