<?php

namespace App\Livewire\Photos;

use App\Models\Photo;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.app')]
#[Title('Index Photo')]


class IndexPhotos extends Component
{
    use WithPagination;

    public $query;



    public function delete(Photo $photo)
    {
        Storage::delete('photos/'.$photo->photo);
        $photo->delete();

        Redirect::route('photo.index');
    }

    public function render()
    {
        return view('livewire.photos.index-photos',[
            'photos' => Photo::search($this->query),

        ]);
    }
}
