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
            'projects' => Project::where('user_id', '>', 14)->where('status', '>', 'aprobado')->get(),
            'projects_energy' => Project::where('category','energia_renovable')->where('status','aprobado')->get(),
            'projects_recycle' => Project::where('status','aprobado')->where('category', 'reciclaje')->get(),
            'projects_agriculture' => Project::where('status','aprobado')->where('category','agricultura_sostenible')->get(),
            'projects_sun' => Project::where('status','aprobado')->where('category',  'energia_solar')->get(),
            'projects_refores' => Project::where('status','aprobado')->where('category', 'reforestacion')->get(),
        ]);
    }
}
