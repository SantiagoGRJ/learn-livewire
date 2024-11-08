<?php

namespace App\Livewire\Forms;

use App\Models\Photo;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PhotoForm extends Form
{
    public ?Photo $photo;
    //
    #[Validate('required|image')]
    public $photoUrl;

    #[Validate('required|string')]
    public $title;

    public $directory='photos';



    public function setPhoto(Photo $photo)
    {
        $this->photo=$photo;
        $this->title=$photo->title;
        $this->photoUrl=$photo->photo;
    }

    public function store()
    {
        $this->validate();

        $date=time();
        $namePhoto=$date."-".$this->photoUrl->getClientOriginalName();

        Photo::create([
            'title'=> $this->title,
            'photo' => $namePhoto
        ]);

        $this->photoUrl->storeAs(path:$this->directory,name:$namePhoto);
    }

    public function update($valuePhoto)
    {
        //$this->validate();
        $this->photo->update([
            'title' => $this->title,
            'photo' => $valuePhoto,
        ]);
    }


    public function getDirectory()
    {
        return $this->directory;
    }



}
