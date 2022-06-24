<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Thumbnail;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductAdd extends Component
{
    use WithFileUploads;

    public $title, $slug, $gender, $categories, $color, $price, $qty, $category, $detail, $description, $thOne, $thTwo, $thThree, $thFour;
    public $size = [];

    protected $rules = [
        'title' => 'required',
        'slug' => 'required',
        'gender' => 'required',
        'category' => 'required',
        'color' => 'required',
        'price' => 'required',
        'qty' => 'required',
        'size' => 'required',
        'detail' => 'required',
        'description' => 'required',
    ];

    public function render()
    {
        $this->categories = Category::all();

        return view('livewire.admin.product-add');
    }

    public function saveProduct()
    {
        try {
            $this->validate();
            $sizes = implode("," ,$this->size);

            $data = Product::create([
                'category_id' => $this->category,
                'name' => $this->title,
                'gender' => $this->gender,
                'slug' => $this->slug,
                'details' => $this->detail,
                'size' => $sizes,
                'colors' => $this->color,
                'price' => $this->price,
                'qty' => $this->qty,
                'description' => $this->description,
            ]);

            Thumbnail::create([
                'product_id' => $data->id,
                'thumbnail_1' => $this->thOne->store('products'),
                'thumbnail_2' => $this->thTwo->store('products'),
                'thumbnail_3' => $this->thThree->store('products'),
                'thumbnail_4' => $this->thFour->store('products'),
            ]);

            $this->title = '';
            $this->slug ='';
            $this->gender = '';
            $this->category = '';
            $this->color = '';
            $this->price = '';
            $this->qty = '';
            $this->size = '';
            $this->detail = '';
            $this->description = '';

            $this->emit('refreshProductList');
            session()->flash('success', 'Saved');

        } catch (\Throwable $th) {
            session()->flash('success', 'Error maybe duplicate!');
        }

    }

}
