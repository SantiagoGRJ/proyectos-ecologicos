<?php

namespace App\Livewire\Dashboard;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Default')]

class PushingDashboard extends Component
{

    public function render()
    {
        return view('livewire.dashboard.pushing-dashboard')->with([
            'projects' => Project::where('user_id',Auth::user()->id)->get(),
        ]);
    }
}
