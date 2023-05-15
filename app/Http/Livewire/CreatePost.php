<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = false;
    public $title, $content, $image, $identificador;

    public function mount()
    {
        $this->identificador = rand();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|max:2048'
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image->store('posts', 'public')
        ]);

        $this->reset(['open', 'title', 'content', 'image']);

        $this->identificador = rand();

        $this->emitTo('show-posts', 'render');
        $this->emit('alert', 'El post se creó con éxito');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
