<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public object $post;
    
    public function __construct($post)
    {
        $this->post = $post;

    }


    public function render()
    {
        return view('components.post');
    }
}
