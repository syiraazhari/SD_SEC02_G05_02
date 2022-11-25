<?php

namespace App\Http\Livewire\Customer;

use App\Models\Profile;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use PhpParser\Node\Expr\Cast\Bool_;

class ConfirmBookingComponent extends Component
{

    use WithFileUploads;
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

    public $service_slug;

    public $user_id;
    public $link;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
        $user = User::find(Auth::user()->id);
        $service = Service::where('slug',$service_slug)->first();
        $this->service_id = $service->id;
        $this->name =$user->name;
        $this->email =$user->email;
        $this->mobile =$user->profile->mobile;
        $this->image =$user->profile->image;
        $this->line1 =$user->profile->line1;
        $this->line2 =$user->profile->line2;
        $this->city =$user->profile->city;
        $this->province =$user->profile->province;
        $this->country =$user->profile->country;
        $this->zipcode =$user->profile->zipcode;
        $this->link = $service->link;
        $this->user_id = $user->id;
    }

    public function bookForm()
    {   
        $booking = new Booking();
        $service = Service::all();
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
        session()->flash('message','Booking has been made successfully!');
        return redirect($this->link);
    }

    public function render()
    {
        $service = Service::where('link',$this->link)->first();
        return view('livewire.customer.confirm-booking-component',['service'=>$service])->layout('layouts.base');
    }
}
