<?php

namespace App\Livewire\Animals;

use App\Models\Animal;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Index Animals')]

class IndexAnimals extends Component
{
    use WithPagination;

    #[Session(key:'search')]
    public $query='';



    public function delete(Animal $id)
    {
        $id->delete();

        $this->redirectRoute('animal.index');

    }

    public function render()
    {
        return view('livewire.animals.index-animals',[
            'Animals' => Animal::search($this->query),
        ]);
    }
}
