<?php

namespace App\Http\Livewire\Product;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Rating;
use Livewire\Component;

class ProductInfo extends Component
{
    public $thumbnail, $product, $rating, $count, $sizeProduct, $ukuran, $colors, $color, $sizeActive, $colorActive, $qty, $buy = 1;

    // from product.averageRating::class
    protected $listeners = ['averageRating' => 'avgRating'];

    protected $rules = [
        'ukuran' => 'required',
        'color' => 'required',
        'buy' => 'required'
    ];

    public function render()
    {
        // class ketergantungan
        $this->avgRating();

        // convert string to array
        $this->sizeProduct = explode(',', $this->product->size);
        $this->colors = explode(',', $this->product->colors);
        $this->qty = $this->product->qty;
        
        return view('livewire.product.product-info');

    }

    public function avgRating()
    {
        $average = Rating::where('product_id', '=', $this->product->id);
        $this->rating = round($average->avg('rating'), 1);

        if ($average->count('rating') != 0) {
            $this->count = $average->count('rating');
        }
        $this->count = 1;
    }

    public function save()
    {
        $this->validate();

        // cek duplikat data
        $duplicate = Cart::search(function($cartItem, $rowId) {
            return $cartItem->id === $this->product->id;
        });

        if ($duplicate->isNotEmpty()) {
            session()->flash('success', 'Item is already to your cart!');
        } else {
            Cart::add(['id' => $this->product->id, 'name' => $this->product->name, 'qty' => $this->buy, 'price' => $this->product->price, 'options' => ['thumbnail' => $this->thumbnail,'size' => $this->ukuran, 'color' => $this->color, 'category' => $this->product->category->name]])
            ->associate('App\Product');

            session()->flash('success', 'Item was added to yout cart!');

            $this->emit('addTobag');
        }
    }
}
