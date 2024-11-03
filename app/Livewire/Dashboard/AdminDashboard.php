<?php

namespace App\Livewire\Dashboard;


use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Default')]
class AdminDashboard extends Component
{

    public function render()
    {
        return view('livewire.dashboard.admin-dashboard');
    }
}
