<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public string $title;
    public string $description;
    public string $price;
    public string $area;
    public string $district;
    public string $city;

    public function __construct($post)
    {
        $this->title = $post->title;
        $this->description = $post->description;
        $this->price = $post->price;
        $this->area = $post->area;
        $this->district = $post->district;
        $this->city = $post->city;

    }


    public function render()
    {
        return view('components.post');
    }
}
