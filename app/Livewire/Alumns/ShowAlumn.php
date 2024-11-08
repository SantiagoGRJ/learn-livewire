<?php

namespace App\Livewire\Alumns;

use App\Models\Alumn;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Show Alumn')]
class ShowAlumn extends Component
{
    public Alumn $alumn;

    public function render()
    {
        return view('livewire.alumns.show-alumn');
    }
}
