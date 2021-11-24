<?php

namespace App\Http\Livewire\Admin;

use App\Models\Members;
use Livewire\Component;

class UsersComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 10;
    }
    public function render()
    {
        $users =  Members::where('utype',['USR'])->orderBy('created_at','ASC')->paginate($this->pagesize);
        $admins =  Members::where('utype',['ADM'])->orderBy('created_at','ASC')->paginate($this->pagesize);
        return view('livewire.admin.users-component',['users'=>$users,'admins'=>$admins])->layout('layouts.dashboard');
    }
}
