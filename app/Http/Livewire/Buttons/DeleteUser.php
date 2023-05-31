<?php

namespace App\Http\Livewire\Buttons;

use Livewire\Component;

class DeleteUser extends Component 
{
    public $user;
    public $confirmingUserDeletion = false;

    public function confirmUserDeletion()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('confirming-delete-user');
        $this->confirmingUserDeletion = true;
    }

    public function deleteUser()
    {
        $this->user->delete();

        session()->flash('success', 'Користувача Успішно Видалено!');
        return redirect()->route('users.index');
    }


    public function render()
    {
        return view('livewire.buttons.delete-user');
    }
}
