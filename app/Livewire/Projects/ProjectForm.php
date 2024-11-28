<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Creacion de Proyecto')]
class ProjectForm extends Component
{
    use WithFileUploads;

    public $projectId;
    public $name;
    public $description;
    public $funding_goal;
    public $duration;
    public $category;
    public $path_img; // Archivo cargado (temporal o final)
    public $path_img_preview; // Para mostrar la imagen previa
    public $is_editing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:2000',
        'funding_goal' => 'required|numeric|min:0',
        'duration' => 'required|integer|min:1',
        'category' => 'required|string|max:100',
        'path_img' => 'nullable|image|max:1024', // Validar que sea una imagen y no supere 1 MB
    ];

    public function mount($projectId = null)
{
    $this->is_editing = $projectId ? true : false;

    if ($this->is_editing) {
        $project = Project::findOrFail($projectId);
        $this->projectId = $project->id;
        $this->name = $project->name;
        $this->description = $project->description;
        $this->funding_goal = $project->funding_goal;
        $this->duration = $project->duration;
        $this->category = $project->category;
        $this->path_img_preview = $project->path_img ? Storage::url('projects/'.$project->path_img) : null;
    } else {
        $this->path_img_preview = null;
    }
}


    public function updatedPathImg()
    {
        // Actualizar la vista previa cuando se cargue una nueva imagen
        if ($this->path_img) {
            $this->path_img_preview = $this->path_img->temporaryUrl();
        }
    }

    public function save()
    {
        $this->validate();

        $imagePath = null;

        if ($this->path_img) {
            // Generar un nombre único para la imagen
            $imageName = uniqid() . '.' . $this->path_img->getClientOriginalExtension();
            $imagePath = $this->path_img->storeAs('projects', $imageName, 'public'); // Guardar la imagen con un nombre específico
        }

        $projectData = [
            'name' => $this->name,
            'description' => $this->description,
            'funding_goal' => $this->funding_goal,
            'duration' => $this->duration,
            'category' => $this->category,
            'user_id' => Auth::id(),
        ];

        if ($imagePath) {
            $projectData['path_img'] = $imageName; // Agregar el path de la imagen solo si fue cargada
        }

        if ($this->is_editing) {
            $project = Project::findOrFail($this->projectId);

            // Eliminar la imagen previa si existe y es diferente de la nueva
            if ($imagePath && $project->path_img && $project->path_img !== $imagePath) {
                Storage::delete('public/' . $project->path_img); // Usar Storage::delete
            }

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
