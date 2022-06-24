<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class VoucherAdd extends Component
{
    public $code; 
    public $type;
    public $value;
    public $percent_off;

    protected $rules = [
        'code' => 'required',
        'type' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.voucher-add');
    }

    public function saveVoucher()
    {
        try {
            $this->validate();

            Coupon::create([
                'code' => $this->code,
                'type' => $this->type,
                'value' => $this->value,
                'percent_off' => $this->percent_off,
            ]);

            $this->code = "";
            $this->type = "";
            $this->value = "";
            $this->percent_off = "";

            $this->emit('refreshVoucherList');
            session()->flash('success', 'Saved');
        } catch (\Throwable $th) {
            session()->flash('success', 'Error maybe duplicate!');
        }
    }
}
