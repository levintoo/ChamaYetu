<?php

namespace App\Http\Livewire\User;

use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompleteProfileComponent extends Component
{
    public $userid;

    public function mount()
    {
        $user = Members::where('id',Auth::user()->id)->first();
        $this->oficial_name = $user->oficial_name;
        $this->national_id = $user->national_id;
        $this->dob = $user->dob;
        $this->residence = $user->residence;
        $this->phone_number = $user->phone_number;
        $this->userid = $user->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'oficial_name' => 'required',
            'national_id' => 'required|unique:users',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'residence' => 'required',
            'dob' => 'required'
        ]);
    }

    public function storeinfo()
    {
        $this->validate([
            'oficial_name' => 'required',
            'national_id' => 'required|unique:users',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'residence' => 'required',
            'dob' => 'required'
        ]);


        $user =  Members::where('id',$this->userid)->first();

        if ($user->status < 1)
        {
            $user->oficial_name = $this->oficial_name;
            $user->national_id = $this->national_id;
            $user->phone_number = $this->phone_number;
            $user->dob = $this->dob;
            $user->residence = $this->residence;
            $user->status = 1;
            $user->save();
            session()->flash('message',"Saved successfully" );
        }else{
            $user->residence = $this->residence;
            $user->save();
            session()->flash('message',"Only Residential Change was accepted" );
        }
    }
    public function render()
    {
        return view('livewire.user.complete-profile-component')->layout('layouts.dashboard');
    }
}
