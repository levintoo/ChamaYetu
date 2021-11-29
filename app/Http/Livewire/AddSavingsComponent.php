<?php

namespace App\Http\Livewire;

use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\Request;

class AddSavingsComponent extends Component
{
    public function storepaypalinfo(Request $request)
    {
        return dd("hello");
    }
    public function render()
    {
        $user = Members::where('userid',Auth::user()->userid)->first();
        return view('livewire.add-savings-component',['user'=>$user])->layout('layouts.dashboard');
    }
}
