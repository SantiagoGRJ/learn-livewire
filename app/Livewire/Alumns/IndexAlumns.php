<?php

namespace App\Livewire\Alumns;

use App\Models\Alumn;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Index Alumn')]

class IndexAlumns extends Component
{
    use WithPagination;

    //#[Url]
    public $query='';


    public function delete(Alumn $Alumn)
    {
        $Alumn->delete();

        Redirect::route('alumn.index');
    }

    public function render()
    {
        return view('livewire.alumns.index-alumns',[
            'Alumns' => Alumn::search($this->query),
        ]);
    }
}
