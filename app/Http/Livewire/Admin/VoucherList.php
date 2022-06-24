<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class VoucherList extends Component
{
    public $code; 
    public $type;
    public $value;
    public $percent_off;

    protected $rules = [
        'code' => 'required',
        'type' => 'required',
    ];

    protected $listeners = ['refreshVoucherList' => '$refresh'];

    public function render()
    {
        $this->voucher = Coupon::all(); 

        return view('livewire.admin.voucher-list');
    }

    public function remove($id)
    {
        Coupon::where('id', '=', $id)->delete();
        session()->flash('success', 'Deleted!');
    }

    public function editVoucher($id)
    {
        $this->validate();
        try {
            $data = Coupon::find($id);
            $data->update([
                'code' => $this->code,
                'type' => $this->type,
                'value' => $this->value,
                'percent_off' => $this->percent_off,
            ]);
           
            $this->code = "";
            $this->type = "";
            $this->value = "";
            $this->percent_off = "";

            session()->flash('success', 'Updated!');
        } catch (\Throwable $th) {
            session()->flash('success', 'input must be unique!');
        }
    }
}
