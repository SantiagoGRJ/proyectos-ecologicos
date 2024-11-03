<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ProjectDetail extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.projects.project-detail');
    }
}
