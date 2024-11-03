<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Default')]

class InvestorDashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.investor-dashboard');
    }
}
