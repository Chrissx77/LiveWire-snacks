<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{

    public $comments = [
        [
            'title' => 'Hello World',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, molestias, numquam aspernatur ducimus officia distinctio maiores, vero ipsa ad porro assumenda explicabo! Doloribus dignissimos quae veniam voluptate maiores pariatur provident?',
        ],
    ];
    public $newComment;

    public function addComment()
    {
        array_unshift($this->comments, ['title' => 'Christian Garozzo', 'body' => $this->newComment]);
    }
    public function render()
    {
        return view('livewire.comments');
    }
}
