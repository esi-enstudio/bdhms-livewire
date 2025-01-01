<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('livewire.dashboard');
    }
}
