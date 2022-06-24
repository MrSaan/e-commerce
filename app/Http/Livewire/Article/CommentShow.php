<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class CommentShow extends Component
{
    public $post;

    // emit from livewire.article.comment
    protected $listeners = ['comment' => 'render'];

    public function render()
    {
        return view('livewire.article.comment-show');
    }
}
