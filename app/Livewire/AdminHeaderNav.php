<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Admin;
use Auth;

class AdminHeaderNav extends Component
{
    public $admin;

    public $listeners = [
        'updateAdminHeaderNav'=> '$refresh'
    ];

    public function mount(){
        $this->admin = Auth::user();
    }
    public function render()
    {
        return view('livewire.admin-header-nav');
    }
}
