<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Bag extends Component
{
    // event from product.info
    protected $listeners = ['addTobag' => 'render'];

    public function render()
    {
        return view('livewire.product.bag');
    }
}
