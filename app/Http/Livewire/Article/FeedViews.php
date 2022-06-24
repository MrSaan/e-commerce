<?php

namespace App\Http\Livewire\Article;

use App\Models\Post;
use Livewire\Component;

class FeedViews extends Component
{
    public function render()
    {
        $articles = Post::limit(3)->get();
        return view('livewire.article.feed-views', [
            'articles' => $articles,
        ]);
    }
}
