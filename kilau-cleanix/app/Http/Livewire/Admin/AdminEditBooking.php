<?php

namespace App\Http\Livewire\Admin;

use App\Models\Booking;
use App\Models\Service;
use App\Models\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AdminEditBooking extends Component
{
    public $bookForm;
    public $name;
    public $email;
    public $time;
    public $date;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $service_id;


    public $booking_id;
    public $user_id;
    public $link;

    public function mount($booking_id)
    {
        $booking = Booking::find($booking_id);
        $service = Service::all();
        $user = User::find(Auth::user()->id);
        $this->name =$user->name;
        $this->service_id = $booking->service_id;
        $this->email =$user->email;
        $this->mobile =$booking->mobile;
        $this->date = $booking->date;
        $this->time = $booking->time;
        $this->line1 =$booking->line1;
        $this->line2 =$booking->line2;
        $this->city =$booking->city;
        $this->province =$booking->province;
        $this->country =$booking->country;
        $this->zipcode =$booking->zipcode;
        $this->user_id = $booking->user_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'service_id' => 'required',
            'time' => 'required',
            'date' => 'required',
            'mobile' => 'required',             
            'line1' => 'required', 
            'line2' => 'required', 
            'city' => 'required',
            'province' => 'required', 
            'country' => 'required', 
            'zipcode' => 'required', 
            'user_id' => 'required', 
        ]);
    }

    public function updateBookForm()
    {   
        $this->validate([
            'service_id' => 'required',
            'time' => 'required',
            'date' => 'required',
            'mobile' => 'required',             
            'line1' => 'required', 
            'line2' => 'required', 
            'city' => 'required',
            'province' => 'required', 
            'country' => 'required', 
            'zipcode' => 'required', 
            'user_id' => 'required', 
        ]);
        $booking = Booking::find($this->booking_id);
        $booking->service_id = $this->service_id;
        $booking->time = $this->time;
        $booking->date = $this->date;
        $booking->mobile = $this->mobile;
        $booking->line1 = $this->line1;
        $booking->line2 = $this->line2;
        $booking->city = $this->city;
        $booking->province = $this->province;
        $booking->country = $this->country;
        $booking->zipcode = $this->zipcode;
        $booking->user_id = $this->user_id;
        $booking->save();
        session()->flash('message','Booking has been updated successfully!');
    }
    public function render()
    {
        $booking = Booking::all();
        return view('livewire.admin.admin-edit-booking')->layout('layouts.base');
    }
}
