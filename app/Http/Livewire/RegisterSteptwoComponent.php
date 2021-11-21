<?php

namespace App\Http\Livewire;

use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterSteptwoComponent extends Component
{
    public function mount()
    {
        if(Auth::user()->status>0)
        {
            return redirect()->route('dashboard');
        }elseif ((Auth::user()->utype)==='ADM'){
            return redirect()->route('dashboard');
        }
        $user = Members::where('id',Auth::user()->id)->first();
        $this->oficial_name = '';
        $this->national_id = '';
        $this->dob = '';
        $this->residence = '';
        $this->phone_number = '';
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
            if($this->userid<10){
                $id = ('CH-000'.$this->userid);
            }
            elseif($this->userid<100){
                $id = ('CH-00'.$this->userid);
            }
            elseif($this->userid<1000){
                $id = ('CH-000'.$this->userid);
            }else{
                $id = ('CH-'.$this->userid);
            }
            $user->userid =$id;
            $user->oficial_name = $this->oficial_name;
            $user->national_id = $this->national_id;
            $user->phone_number = $this->phone_number;
            $user->dob = $this->dob;
            $user->residence = $this->residence;
            $user->status = 1;
            $user->save();
            session()->flash('message',"Saved successfully" );
            return redirect()->route('dashboard');
        }else{
            session()->flash('message',"You cannot change this details!" );
            return redirect()->route('dashboard');
        }
    }
    public function render()
    {
        return view('livewire.register-steptwo-component')->layout('layouts.guest');
    }
}
