<?php

namespace App\Http\Livewire\User;

use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WalletUpdateComponent extends Component
{
    public function mount()
    {
        $user = Members::where('id',Auth::user()->id)->first();
        $this->balance = $user->balance;
    }
    public function render()
    {
        return view('livewire.user.wallet-update-component',['balance' =>$this->balance]);
    }
}
