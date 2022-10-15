<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceComponent extends Component
{

    use WithPagination;
    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-service-component',['services'=>$services])->layout('layouts.base');
    }
}
