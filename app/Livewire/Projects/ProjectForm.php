<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Creacion de Proyecto')]
class ProjectForm extends Component
{
    public $projectId;
    public $name;
    public $description;
    public $funding_goal;
    public $duration;
    public $category;
    public $is_editing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:2000',
        'funding_goal' => 'required|numeric|min:0',
        'duration' => 'required|integer|min:1',
        'category' => 'required|string|max:100',
    ];

    public function mount($projectId = null)
    {
        if ($projectId) {
            $this->is_editing = true;
            $project = Project::findOrFail($projectId);

            $this->projectId = $project->id;
            $this->name = $project->name;
            $this->description = $project->description;
            $this->funding_goal = $project->funding_goal;
            $this->duration = $project->duration;
            $this->category = $project->category;
        }
    }

    public function save()
    {
        $this->validate();

        $projectData = [
            'name' => $this->name,
            'description' => $this->description,
            'funding_goal' => $this->funding_goal,
            'duration' => $this->duration,
            'category' => $this->category,
            'user_id' => Auth::id(),
        ];

        if ($this->is_editing) {
            $project = Project::findOrFail($this->projectId);
            $project->update($projectData);
        } else {
            Project::create($projectData);
        }

        session()->flash('message', $this->is_editing ? 'Proyecto actualizado exitosamente.' : 'Proyecto creado exitosamente.');
        return redirect()->route('dashboard.pushing');
    }



    public function render()
    {
        return view('livewire.projects.project-form');
    }
}
