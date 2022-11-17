<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

class ConfirmBookingComponent extends Component
{
    public function render()
    {
        return view('livewire.customer.confirm-booking-component')->layout('layouts.base');
    }
}
