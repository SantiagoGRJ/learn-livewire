<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]

class CreatePost extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();

        return Redirect::route('post.index')
        ->with('status','Post Created!!');
    }


    public function render()
    {
        return view('livewire.posts.create-post')
        ->with([
            'author' => Auth::user()->name,
        ]);
    }
}
