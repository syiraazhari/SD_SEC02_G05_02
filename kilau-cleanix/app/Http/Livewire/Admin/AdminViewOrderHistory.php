<?php

namespace App\Http\Livewire\Admin;

use App\Models\Booking;
use Livewire\Component;

class AdminViewOrderHistory extends Component
{
    public function deleteOrderHistory($id)
    {
        $bookings = Booking::find($id);
        $bookings->delete();
        session()->flash('message','Order History has been deleted successfully!');
    }
    public function render()
    {
        $bookings = Booking::paginate(15);
        return view('livewire.admin.admin-view-order-history',['bookings'=>$bookings])->layout('layouts.base');
    }
}
