<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Apartment extends Component
{
    public string $title;
    public string $address;
    public string $price;
    public string $bedroom;
    public string $wc;
    public string $area;
    public string $district;

    public function __construct($post)
    {
        $this->title = $post->title;
        $this->address = $post->address;
        $this->price = $post->price;
        $this->bedroom = $post->bedroom;
        $this->wc = $post->wc;
        $this->area = $post->area;
        $this->district = $post->district;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apartment');
    }
}
