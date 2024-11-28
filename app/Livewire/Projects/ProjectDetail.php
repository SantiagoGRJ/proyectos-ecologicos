<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ProjectDetail extends Component
{
    public Project $project;

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
        return view('livewire.projects.project-detail');
    }
}
