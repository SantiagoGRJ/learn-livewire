<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Component;

#[Layout('layouts.app')]

class UpdatePost extends Component
{

    public PostForm $form;

    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }

    public function update()
    {
        $this->form->update();

        Redirect::route('post.index');

    }



    public function render()
    {
        return view('livewire.posts.update-post');
    }
}


/*
    public Post $post;
    public $title;
    public $description;

    public function mount(Post $post)
    {
        $this->post=$post;

        $this->fill(
            $post->only('title','description')
        );
    } */



/*     #[Locked]
    public $id;

    public $title;

    public $author;

    public function mount(Post $post)
    {
        $this->id=$post->id;
        $this->title=$post->title;
        $this->author=$post->author;
    }

    public function update()
    {
        $post=Post::findOrFail($this->id);
        $post->update([
            'title' => $this->title,
            'author' => $this->author
        ]);
        session()->flash('message','Post Updated Successfully!');
        Redirect::route('post.index');
    } */


