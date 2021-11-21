<?php

namespace App\Http\Livewire;

use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $user =Members::where('userid',Auth::user()->userid)->first();
//        $waletbalance= number_format($user->walletbalance, 2, '.', ',');
        return view('livewire.dashboard-component',['user'=>$user])->layout('layouts.dashboard');
    }
}
