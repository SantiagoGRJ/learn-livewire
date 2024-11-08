<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ShowPost extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.posts.show-post');
    }
}
