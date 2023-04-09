<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $title;
    public $img;
    public $price;
    public $description;

    public function store(){
        $this->validate();

        Post::create([
            "user_id" => Auth::user()->id,
            "title" => $this->title,
            "img" => $this->img->store("public/photos"),
            "price" => $this->price,
            "description" => $this->description,
        ]);

        $this->reset();
        session()->flash("successMessage", "Post creato con successo");
    }

    public function updatedPhoto()
    {
        $this->validate([
            'img' => 'image|max:1024',
        ]);
    }

    protected $rules = [

        'title' => 'required|min:3|max:200',
        'description' => 'required|min:3|max:2000',
        'price' => 'required|numeric',
        'img.*' => 'required|image|max:1024|dimensions:max_width=2000,max_height=1800',
    ];

    public function render()
    {
        return view('livewire.create-post');
    }
}
