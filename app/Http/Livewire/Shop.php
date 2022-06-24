<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Rating;
use Livewire\Component;

class Shop extends Component
{
    public $type, $search, $rating, $productId, $count, $buy, $qty, $colorActive, $color, $sizeActive, $ukuran, $category;

    protected $queryString = ['search', 'type'];
    protected $rules = [
        'buy' => 'required',
        'color' => 'required',
        'ukuran' => 'required'
    ];

    public function render()
    {
        $average = Rating::where('product_id', '=', $this->productId);
        $this->rating = round($average->avg('rating'), 1);

        if ($average->count('rating') != 0) {
            $this->count = $average->count('rating');
        }
        $this->count = 1;

        if ($this->search != null && $this->type != null) {
            $products = Product::where('gender', '=', $this->search)->where('category_id', '=', $this->type)->get();
            $t = Category::where('id', '=', $this->type)->first();
        } elseif ($this->search != null) {
            $products = Product::where('gender', '=', $this->search)->get();
            $t = '';
        } elseif($this->type != null){
            $products = Product::where('category_id', '=', $this->type)->get();
            $t = Category::where('id', '=', $this->type)->first();
        } else {
            $products = Product::all();
            $t = '';
        }

        return view('livewire.shop', [
            'products' => $products,
            'tipe' => $t,
        ]);
    }

    public function save()
    {
        $this->validate();

        // cek duplikat data
        $duplicate = Cart::search(function($cartItem, $rowId) {
            return $cartItem->id === $this->productId;
        });

        if ($duplicate->isNotEmpty()) {
            session()->flash('success', 'Item is already to your cart!');
        } else {
            $record = Product::find($this->productId);
            Cart::add(['id' => $this->productId, 'name' => $record->name, 'qty' => $this->buy, 'price' => $record->price, 'options' => ['color' => $this->color, 'category' => $this->category, 'gender','size' => $this->ukuran]]);

            session()->flash('success', 'Item was added to yout cart!');

            $this->emit('addTobag');
        }
    }

}
