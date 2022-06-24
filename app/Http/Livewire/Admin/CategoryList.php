<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public $category;
    public $name;
    public $slug;

    // emit from Category add
    protected $listeners = ['refreshCategoryList' => '$refresh'];

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];

    public function render()
    {
        $this->category = Category::all(); 
        return view('livewire.admin.category-list');
    }

    public function remove($id)
    {
        Category::where('id', '=', $id)->delete();
        session()->flash('success', 'Deleted!');
    }

    public function editCategory($id)
    {
        $this->validate();
        try {
            $data = Category::find($id);
            $data->update([
                'name' => $this->name,
                'slug' => $this->slug,
            ]);
            $this->name = "";
            $this->slug= "";
            session()->flash('success', 'Updated!');
        } catch (\Throwable $th) {
            session()->flash('success', 'input must be unique!');
        }
    }
}
