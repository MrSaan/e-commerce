<?php

namespace App\Http\Livewire\Product;

use App\Models\Rating;
use Livewire\Component;

class AverageRating extends Component
{
    public $product;
    public $avgRating;
    public $countRating;
    public $countBy;
    public $ratingGroup= [];

    protected $listeners = ['averageRating' => 'avgRating'];

    public function render()
    {     
        // dependensi class
        $this->ratingGroup();
        $this->avgRating();
        return view('livewire.product.average-rating');
        
    }

    public function ratingGroup()
    {
        // untuk menjumlahkan rating dari 1-5
        $a = Rating::all()->where('product_id', '=', $this->product->id)->groupBy('rating');
        $hasil = $a->map(function($group, $key){
            if($key == 4) {
                return [
                  'star4' => $group->count()
                ];
             } elseif($key == 5) {
                 return [
                     'star5' => $group->count()
                 ];
             } elseif($key == 3) {
                return [
                    'star3' => $group->count()
                ];
            } elseif($key == 2) {
                return [
                    'star2' => $group->count()
                ];
            } elseif($key == 1) {
                return [
                    'star1' => $group->count()
                ];
            }
        });

        $this->ratingGroup = $hasil;        
    }

    public function avgRating()
    {
        $average = Rating::where('product_id', '=', $this->product->id);
        $this->avgRating = round($average->avg('rating'), 1);

        if ($average->count('rating') != 0) {
            $this->countRating = $average->count('rating');
        }
        $this->countRating = 1;
    }
}
