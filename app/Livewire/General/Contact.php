<?php

namespace App\Livewire\General;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Sobre Nosotros')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.general.contact');
    }
}
