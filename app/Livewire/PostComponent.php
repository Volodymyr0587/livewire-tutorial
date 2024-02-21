<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class PostComponent extends Component
{
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
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    public function render()
    {
        return view('livewire.post-component');
    }
}
