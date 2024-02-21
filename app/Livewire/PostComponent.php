<?php

namespace App\Livewire;

use Livewire\Component;

class PostComponent extends Component
{
    public $isOpen = 0;

    public function create()
    {
        $this->openModal();
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
