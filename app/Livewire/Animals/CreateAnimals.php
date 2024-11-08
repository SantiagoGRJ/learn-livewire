<?php

namespace App\Livewire\Animals;

use App\Livewire\Forms\AnimalForm;
use App\Models\Animal;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Create Animals')]

class CreateAnimals extends Component
{
    public AnimalForm $form;

    public function save()
    {
        $this->form->store();

        Redirect::route('animal.index');
    }

    public function render()
    {
        return view('livewire.animals.create-animals');
    }
}
