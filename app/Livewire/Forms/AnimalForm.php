<?php

namespace App\Livewire\Forms;

use App\Models\Animal;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AnimalForm extends Form
{
    public ?Animal $animal;
    //
    #[Validate('required')]
    public $name;

    #[Validate('required|numeric|min:0')]
    public $quantity;

    public function setAnimal(Animal $animal)
    {
        $this->animal =$animal;
        $this->name = $animal->name;
        $this->quantity = $animal->quantity;
    }

    public function store()
    {
        $this->validate();

        Animal::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->animal->update(
            $this->all()
        );

    }

}
