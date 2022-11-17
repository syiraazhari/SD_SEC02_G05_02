<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class KilauCleanix2 extends Component
{
    public function render()
    {
        $slides = Slider::where('status',1)->get();
        $scategories = ServiceCategory::inRandomOrder()->get();
        return view('livewire.kilau-cleanix2',['scategories'=>$scategories],['slides'=>$slides])->layout('layouts.base');
    }
}
