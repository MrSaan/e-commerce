<?php

namespace App\Http\Livewire\Product;

use App\Models\Rating as ModelsRating;
use Livewire\Component;

class Rating extends Component
{
    public $product;
    public $rating;
    public $comment;
    public $status = 1;
    public $currentId;
    public $time;

    protected $rules = [
        'rating' => 'required',
        'comment' => 'required'
    ];

    public function render()
    {
        // query mengambil data rating tanpa user yang sedang login.
        if (auth()->user()) {
            $query = ModelsRating::where('product_id', '=', $this->product->id)
                    ->where('user_id', '!=', auth()->user()->id)
                    ->orderBy('updated_at', 'desc')
                    ->get();
        } else {
            $query = ModelsRating::where('product_id', '=', $this->product->id)
            ->orderBy('updated_at', 'desc')
            ->get();
        }    
        
        return view('livewire.product.rating', [
            'comments' => $query
        ]);
    }

    public function mount()
    {
        // cek user pernah rating produk
       if (auth()->user()) {
           $query = ModelsRating::where('product_id', '=', $this->product->id)
                        ->where('user_id', '=', auth()->user()->id)
                        ->first();
            if (!empty($query)) {
                $this->rating  = $query->rating;
                $this->comment = $query->comment;
                $this->currentId = $query->id;
                $this->time = $query->updated_at;
            }
        }
        return view('livewire.product.rating');
    }

    public function rate()
    {
        $query = ModelsRating::where('product_id', '=', $this->product->id)
                    ->where('user_id', '=', auth()->user()->id)
                    ->first();

        $this->validate();
    
        if (!empty($query)) {
            $query->user_id = auth()->user()->id;
            $query->product_id = $this->product->id;
            $query->rating = $this->rating;
            $query->comment = $this->comment;
            $query->updated_at = $this->time;
            $query->status = 1;
            try {
                $query->update();
                    session()->flash('success', 'Successfully updated.');
                $this->render();
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('seuccess', 'Success!');
        } else {
            $query = new ModelsRating;
            $query->user_id = auth()->user()->id;
            $query->product_id = $this->product->id;
            $query->rating = $this->rating;
            $query->comment = $this->comment;
            $query->status = 1;
            try {
                $query->save();
                session()->flash('success', 'Thank you for your review.');
            } catch (\Throwable $th) {
                throw $th;
            }
            $this->hideForm = true;
        }

        // by pass ke product.averageRating
        $this->emit('averageRating');
    }

    public function delete($id)
    {
        $rating = ModelsRating::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
            session()->flash('success', 'Deleted.');
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
            $this->comment = '';
        }

        // by pass ke product.averageRating
        $this->emit('averageRating');
    }
}
