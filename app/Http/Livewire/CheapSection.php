<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CheapSection extends Component
{
    public function render()
    {
        return view('livewire.cheap-section', [
            'products' => Product::where('price', '<=', 20 )->get(),
        ]);
    }
}
