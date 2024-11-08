<?php

namespace App\Livewire\Alumns;

use App\Models\Alumn;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Update Alumn')]

class UpdateAlumn extends Component
{
    public Alumn $alumn;

    public $name;

    public $number;

    public function mount(Alumn $alumn)
    {
        $this->alumn=$alumn;
        $this->name=$alumn->name;
        $this->number=$alumn->number;

    }

    public function update()
    {
        $this->alumn->update([
            'name' => $this->name,
            'number' => $this->number,
        ]);

        Redirect::route('alumn.index');
    }

    public function render()
    {
        return view('livewire.alumns.update-alumn');
    }
}
