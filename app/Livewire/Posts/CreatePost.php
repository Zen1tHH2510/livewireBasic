<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->todo = '';
    }
}
