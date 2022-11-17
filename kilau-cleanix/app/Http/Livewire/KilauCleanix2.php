<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use App\Models\Slider;
use App\Models\Service;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class KilauCleanix2 extends Component
{
    public function render()
    {
        $slides = Slider::where('status',1)->get();
        $scategories = ServiceCategory::inRandomOrder()->take(8)->get();
        $fservices = Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $fscategories = ServiceCategory::where('featured',1)->take(8)->get();
        $sid = ServiceCategory::where('slug',['ac'])->get()->pluck('id');
        $aservices = Service::whereIn('service_category_id',$sid)->inRandomOrder()->take(8)->get();
        return view('livewire.kilau-cleanix2',['scategories'=>$scategories,'fservices'=>$fservices,'slides'=>$slides,'fscategories'=>$fscategories,'aservices'=>$aservices])->layout('layouts.base');
    }
}
