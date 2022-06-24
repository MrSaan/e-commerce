<?php

namespace App\Http\Livewire\Shop;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Spatie\FlareClient\Api;

class Checkout extends Component
{
    public $apikey, $snapToken, $modal, $buyer, $voucher, $vouchers, $discount, $newSubTotal, $newTax, $newTotal, $products;

    protected $listeners = ['totalbelanja' => 'render', 'checkout' => 'checkoutSuccess' ];

    protected $rules = [
        'voucher' => 'required',
    ];

    public function booted()
    {
        $apikey = config('services.midtrans.server_key');

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = $apikey;
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }

    public function render()
    {        
        // set variabel voucher
        $tax = config('cart.tax') / 100;
        $this->discount = session()->get('coupon')['discount'] ?? "0";
        $this->newSubTotal = str_replace(",", "", Cart::subtotal()) - $this->discount;
        $this->newTax = $this->newSubTotal * $tax ;
        $this->newTotal = $this->newSubTotal * (1 + $tax);

        $this->vouchers = Coupon::all();

        $this->products = Cart::content()->flatten()->toArray();
        $this->products = array_map(function ($val) {
            $val['quantity'] = $val['qty'];
            return $val;
        }, $this->products);

        if (session()->has('coupon')) {
            array_push($this->products, [
                'id' => 'a3',
                'price' => ($this->discount * -1),
                'quantity' => 1,
                'name' => "Voucher"
            ], [
                'id' => 'a4',
                'price' => ceil($this->newTax),
                'quantity' => 1,
                'name' => "tax"
            ]);
        } else {
            array_push($this->products, [
                'id' => 'a4',
                'price' => ceil($this->newTax),
                'quantity' => 1,
                'name' => "tax"
            ]);
        }
        

        if (auth()->user()) {
            if (count(Cart::content()) >= 1) {
                $params = [
                    'transaction_details' => [
                        'order_id' => rand(),
                        'gross_amount' =>0,
                    ], 
                    'item_details' => $this->products,
                    'customer_details' => [
                        'first_name' => auth()->user()->username,
                        'last_name' => '',
                        'email' => auth()->user()->email,
                    ],
                ];
            } else {
                $params = [
                    'transaction_details' => [
                        'order_id' => rand(),
                        'gross_amount' =>14000,
                    ], 
                    'customer_details' => [
                        'first_name' => auth()->user()->username,
                        'last_name' => '',
                        'email' => auth()->user()->email,
                    ],
                ];
            }
            
            // dd($params);
            $this->snapToken = \Midtrans\Snap::getSnapToken($params);

        }

        // dd(Cart::content());

        
        return view('livewire.shop.checkout');
    }

    public function checkoutSuccess($result)
    {
        dd($result);
    }

    public function redeem()
    {
        $this->validate();
         
        $coupon = Coupon::where('code', $this->voucher)->first();

        $a = str_replace(",", "", Cart::subtotal());

        if (!$coupon) {
            session()->flash('success', 'invalid voucher code. Please try again!');
        }

        // jika berhasil kupon masuk ke dalam session coupon
        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount($a),
        ]);

        session()->flash('success', 'Coupon has been aplied!');
        return redirect()->to(route('cart'));

    }

    public function unredeem()
    {
        session()->forget('coupon');
        session()->flash('success', 'Coupon has been removed!');
        return redirect()->to(route('cart'));
    }

}
