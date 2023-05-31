<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $perPage  = 10;
    public function render()
    {
        
        return view('livewire.users.index',[
            'users' => User::paginate($this->perPage)
        ]);
    }
}
