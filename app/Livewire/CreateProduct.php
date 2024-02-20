<?php

namespace App\Livewire;

use App\Models\Product;
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
        $this->validate([
            'title' => 'required|string|min:2',
            'description' => 'required|string|max:500',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);


        // dd([$this->title, $this->description, $this->price]);
    }
}
