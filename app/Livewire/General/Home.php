<?php

namespace App\Livewire\General;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Home')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.general.home')->with([
            'projects' => Project::where('user_id', '>', 7)->get()
        ]);
    }
}
