<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = "title11";
    public $price;
    public $description;

    public function render()
    {
        return view('livewire.create-post');
    }
}
