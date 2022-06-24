<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class ArticleList extends Component
{
    public $article;
    public $categories;
    public $category;

    public function render()
    {
        $this->article = Post::all();
        $this->categories = Category::all();

        return view('livewire.admin.article-list');
    }
}
