<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    public $isOpen = 0;

    #[Rule('required|min:3')]
    public $title;

    #[Rule('required|min:3')]
    public $body;

    public function create()
    {
        $this->openModal();
    }

    public function store()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        session()->flash('success', 'Post created successfully');

        $this->reset('title', 'body');
        $this->closeModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::paginate(5),
        ]);
    }
}
