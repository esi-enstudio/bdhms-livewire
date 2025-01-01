<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Add new user')]
class Create extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('livewire.user.create');
    }
}
