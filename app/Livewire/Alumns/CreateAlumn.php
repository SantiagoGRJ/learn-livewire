<?php

namespace App\Livewire\Alumns;

use App\Models\Alumn;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Create Alumn')]

class CreateAlumn extends Component
{
    public $name;

    public $number;

    public function save()
    {
        Alumn::create([
            'name' => $this->name,
            'number' => $this->number
        ]);

        Redirect::route('alumn.index');
    }

    public function render()
    {
        return view('livewire.alumns.create-alumn');
    }
}
