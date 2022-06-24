<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryAdd extends Component
{
    public $name; 
    public $slug;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.category-add');
    }

    public function saveCategory()
    {
        try {
            $this->validate();
            
            Category::create([
                'name' => $this->name,
                'slug' => $this->slug,
            ]);

            $this->name = "";
            $this->slug = "";

            $this->emit('refreshCategoryList');
            session()->flash('success', 'Saved');
        } catch (\Throwable $th) {
            session()->flash('success', 'Error maybe duplicate!');
        }


    }
}
