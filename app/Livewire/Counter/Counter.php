<?php

namespace App\Livewire\Counter;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]

class Counter extends Component
{
    public $count=1;

    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }


    public function render()
    {
        return view('livewire.counter.counter');
    }
}
