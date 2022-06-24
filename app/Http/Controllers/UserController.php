<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $quantity;
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.profile', ['user' => $user]);
    }

    public function voucher()
    {
        $voucher = Coupon::all();
        return view('pages.user.voucher', ['voucher' => $voucher]);
    }
}
