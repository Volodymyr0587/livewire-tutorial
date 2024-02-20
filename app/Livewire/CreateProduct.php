<?php

namespace App\Livewire;

use Livewire\Component;

class CreateProduct extends Component
{
    public $title = 'Default title value';

    public $description = 'Default description value';

    public $price = 0;

    public function render()
    {
        return view('livewire.create-product');
    }

    /**
     * Save form function
     */
    public function save()
    {
        dd([$this->title, $this->description, $this->price]);
    }
}
