<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Default')]
class ProjectSearch extends Component
{
    use WithPagination;
        
    public $query = '';

    public function render()
    {
        return view('livewire.projects.project-search')->with([
            'projects' => Project::search($this->query),
        ]);
    }
}
