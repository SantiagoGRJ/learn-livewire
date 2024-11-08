<?php

namespace App\Livewire\Animals;

use App\Livewire\Forms\AnimalForm;
use App\Models\Animal;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Update Animal')]

class UpdateAnimals extends Component
{
    public AnimalForm $form;

    public function mount(Animal $animal)
    {
        $this->form->setAnimal($animal);
    }

    public function update()
    {
        $this->form->update();

        Redirect::route('animal.index');
    }

    public function render()
    {
        return view('livewire.animals.update-animals');
    }
}
