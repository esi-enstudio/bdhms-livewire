<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('All users')]
class Index extends Component
{
    public $users;
    public function mount(): void
    {
        $this->users = User::latest()->get();
    }
    public function render(): Factory|View|Application
    {
        return view('livewire.user.index');
    }
}
