<?php

namespace App\Http\Livewire\Article;

use App\Models\Post;
use Livewire\Component;

class Articles extends Component
{
    public $post;

    public function render()
    {
        $this->post = Post::all();
        return view('livewire.article.articles');
    }
}
