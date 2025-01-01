<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Title('All users')]
class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public string $search = '';
    public string $role = ''; // Default empty to show all roles
    public string $status = ''; // Default empty to show all roles

    public function render(): Factory|View|Application
    {
        $users = User::query()
            ->when($this->search, fn($query) => $query->where('name', 'LIKE', "%{$this->search}%"))
            ->when($this->role, fn($query) => $query->where('role', $this->role))
            ->when($this->status, fn($query) => $query->where('status', $this->status))
            ->latest()
            ->paginate(4);

        return view('livewire.user.index', [
            'users' => $users
        ]);
    }
}
