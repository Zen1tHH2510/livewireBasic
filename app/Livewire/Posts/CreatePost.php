<?php

namespace App\Livewire\Posts;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'jelly';

    public function render()
    {
        return view('livewire.posts.create-post')->with([
            'author' =>  'mgmg',
        ]);
    }
}
