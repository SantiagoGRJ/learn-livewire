<?php

namespace App\Livewire\Photos;

use App\Models\Photo;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Show Animals')]

class ShowPhoto extends Component
{
    public Photo $photo;

    public function render()
    {
        return view('livewire.photos.show-photo');
    }
}
