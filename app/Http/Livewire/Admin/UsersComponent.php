<?php

namespace App\Http\Livewire\Admin;

use App\Models\Members;
use Livewire\Component;

class UsersComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $utype;

    public function mount()
    {
        $this->utype = 'USR';
        $this->sorting = "default";
        $this->pagesize = 10;
    }
    public function render()
    {
        $users =  Members::where('utype',[$this->utype])->orderBy('created_at','ASC')->paginate($this->pagesize);
        return view('livewire.admin.users-component',['users'=>$users])->layout('layouts.dashboard');
    }
}
