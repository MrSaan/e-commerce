<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class Comment extends Component
{
    public $post;
    public $comment;

    protected $rules = [
        'comment' => 'required'
    ];

    public function render()
    {
        return view('livewire.article.comment');
    }

    public function comment()
    {
        $this->validate();

        $this->post->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => $this->comment,
        ]);
        $this->comment = "";

        session()->flash('success', 'adding comment!');
        $this->emit('comment');
    }
}
