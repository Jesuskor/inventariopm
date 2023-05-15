<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $search, $post, $image, $identificador;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $readyToLoad = false;

    public $open_edit = false;

    protected $listeners = ['render', 'delete'];

    protected $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'cant' => ['except' => '10'],
    ];

    public function mount()
    {
        $this->identificador = rand();
        $this->post = new Post();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'post.title' => 'required',
        'post.content' => 'required',
    ];

    public function render()
    {
        if ($this->readyToLoad) {
            $posts = Post::where('title', 'like', '%' . $this->search . '%')
                ->orWhere('content', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $posts = [];
        }

        return view('livewire.show-posts', compact('posts'));
    }

    public function loadPost()
    {
        $this->readyToLoad = true;
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'desc';
        }
    }

    public function edit(Post $post)
    {
        $this->post = $post;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();

        if ($this->image) {
            Storage::disk('public')->delete($this->post->image);
            $this->post->image = $this->image->store('posts', 'public');
        }

        $this->post->save();

        $this->reset('open_edit', 'image');

        $this->identificador = rand();

        $this->emit('alert', 'El post se actualizó con éxito');
    }

    public function delete(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();
    }
}
