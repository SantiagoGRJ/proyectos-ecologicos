<?php

namespace App\Livewire\Components;

use Livewire\Component;

class BreadCrumb extends Component
{
    public $pageName;
    public $description;
    public function render()
    {
        return view('livewire.components.bread-crumb');
    }
}
