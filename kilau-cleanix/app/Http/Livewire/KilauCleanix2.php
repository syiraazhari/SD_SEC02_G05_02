<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;

class KilauCleanix2 extends Component
{
    public function render()
    {
        $slides = Slider::where('status',1)->get();
        return view('livewire.kilau-cleanix2',['slides'=>$slides])->layout('layouts.base');
    }
}
