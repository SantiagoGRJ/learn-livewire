<?php

namespace App\Livewire\Todo;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]

class TodoList extends Component
{
    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[]= $this->pull('todo');
       /*  $this->todos[] = $this->todo;

        $this->todo=´´;
        $this->reset('todo'); */
    }


    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
