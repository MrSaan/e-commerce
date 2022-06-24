<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;


class ProductList extends Component
{
    public $product;
    
    // emit from productAdd
    protected $listeners = ['refreshProductList' => '$refresh'];
    
    public function render()
    {
        $this->product = Product::all();

        return view('livewire.admin.product-list');
    }
}
