<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;


class UpdatePost extends Component
{
    use WithFileUploads;


    public $post_id;
    public $title;
    public $price;
    public $img;
    public $description;

    
    
    //! Molto simile al constructor() delle Classi
    //* Viene Chiamato solo al 1 render
    public function mount($post)
    {
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->img = $post->img;
        $this->price = $post->price;
        $this->description = $post->description;
    }
    
    public function store(){
        $post = Post::where("id", $this->post_id);

        // dd($post);
        $post->update([
            "title" => $this->title,
            "price" => $this->price,
            "description" => $this->description,
        ]);

        if ($this->img) {
            $post->update([
                "img" => $this->img->store("public/photos"),
            ]);
        }

        $this->reset();
        session()->flash("successMessage", "Post aggiornato con successo");
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}
