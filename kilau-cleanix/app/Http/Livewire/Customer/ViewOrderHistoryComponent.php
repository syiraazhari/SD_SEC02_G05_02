<?php

namespace App\Http\Livewire\Customer;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewOrderHistoryComponent extends Component
{
    public $user;
    public $user_id;

    // public function mount($user)
    // {
    //     $user = User::find(Auth::user()->id);
    //     $this->user_id = $user->id;
    // }
    public function deleteOrderHistory($id)
    {
        $bookings = Booking::find($id);
        $bookings->delete();    
        session()->flash('message','Order History has been deleted successfully!');
    }

    public function render()
    {
        $bookings = Booking::where('user_id',Auth::user()->id)->get();
        return view('livewire.customer.view-order-history-component',['bookings'=>$bookings])->layout('layouts.base');
    }
}
