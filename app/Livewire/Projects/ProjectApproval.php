<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]

class ProjectApproval extends Component
{
    use WithPagination;


    public function aprobar(Project $project)
    {
        $project->status = 'aprobado';
        $project->save();
        Redirect::route('dashboard.admin');
    }

    public function rechazar(Project $project)
    {
        $project->status = 'rechazado';
        $project->save();
        Redirect::route('dashboard.admin');
    }

    public function render()
    {
        return view('livewire.projects.project-approval')->with([
            'projects' => Project::where('status','pendiente')->paginate(5),
        ]);
    }
}
