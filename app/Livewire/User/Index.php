<?php

namespace App\Livewire\User;

use Livewire\Component;

class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('livewire.user.index');
    }
}
