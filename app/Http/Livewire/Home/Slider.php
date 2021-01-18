<?php

namespace App\Http\Livewire\Home;

use App\Models\Banner;
use Livewire\Component;

class Slider extends Component
{
    public $banners = [];

    public function getBanners()
    {
        $this->banners = Banner::all();
    }

    public function render()
    {
        $this->getBanners();

        return view('livewire.home.slider');
    }
}
