<?php

namespace App\Livewire\Photos;

use App\Livewire\Forms\PhotoForm;
use App\Models\Photo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Update Photo')]

class UpdatePhoto extends Component
{
    use WithFileUploads;

    public PhotoForm $form;

    
    public $namePhoto;

    public function mount(Photo $photo)
    {
       $this->form->setPhoto($photo);
    }

    public function update()
    {
        if($this->namePhoto){

        $date=time();

        $newPhotoUrl=$date."-".$this->namePhoto->getClientOriginalName();

        $this->deletePhotoStorage($this->form->photoUrl);

        $this->storeAsPhoto($this->namePhoto,$newPhotoUrl);

        }
        $value=$newPhotoUrl ?? $this->form->photoUrl;
        $this->form->update($value);

        /* $this->photo->update([
            'title' => $this->title,
            'photo' => $this->newPhotoUrl ?? $this->photoUrl
        ]); */
        Redirect::route('photo.index');
    }

    public function storeAsPhoto($valueNamePhoto,$valueNewPhotoUrl)
    {
        $valueNamePhoto->storeAs(path:$this->form->getDirectory(),name:$valueNewPhotoUrl);
    }

    public function deletePhotoStorage($photoUrl)
    {
        Storage::delete($this->form->getDirectory().'/'.$photoUrl);
    }

    public function render()
    {
        return view('livewire.photos.update-photo');
    }
}
