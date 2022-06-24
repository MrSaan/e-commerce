<?php

namespace App\Http\Livewire\Shop;

use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Livewire\Component;

class Cart extends Component
{
    public $buy;

    public function render()
    {
        
        return view('livewire.shop.cart');
    }

    public function destroy($id)
    {
        FacadesCart::remove($id);
        // $this->emit('totalbelanja'); // event to shop.checkout
        $this->emit('addTobag'); // event to product.bag
        return redirect()->to(route('cart'));
    }

    public function changeQty($id)
    {
        FacadesCart::update($id, $this->buy);
        session()->flash('success', 'Qty has been change!');

        // $this->emit('totalbelanja'); // event to shop.checkout
        $this->emit('addTobag'); // event to product.bag
        return redirect()->to(route('cart'));

    }

}
