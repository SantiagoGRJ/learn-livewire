<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post;

    #[Validate('required|min:5')]
    public $title = '';

    #[Validate('required|min:8')]
    public $author = '';

    public function setPost(Post $post)
    {
        $this->post = $post;

        $this->title = $post->title;
        $this->author= $post->author;
    }

    public function store()
    {
        $this->validate();

        Post::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->post->update(
            $this->all()
        );

        $this->reset();

    }
}
