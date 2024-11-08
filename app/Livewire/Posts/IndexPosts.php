<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]

class IndexPosts extends Component
{
    use WithPagination;
    //#[Url]
    public $query='';



    public function delete(Post $post)
    {
        $post->delete();

        Redirect::route('post.index');

    }

    public function render()
    {
        return view('livewire.posts.index-posts',[
            'posts' => Post::search($this->query),
        ]);
    }
}
