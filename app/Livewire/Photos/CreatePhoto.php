<?php

namespace App\Livewire\Photos;

use App\Livewire\Forms\PhotoForm;
use App\Models\Photo;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Create Photo')]

class CreatePhoto extends Component
{
    use WithFileUploads;

    public PhotoForm $form;

    public function save()
    {
        $this->form->store();
        Redirect::route('photo.index');
    }

    public function render()
    {
        return view('livewire.photos.create-photo');
    }
}
