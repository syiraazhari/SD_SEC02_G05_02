<div>
    <div><body style="background-color:#659DBD;"></div>
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <form wire:submit.prevent="updateBookForm">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        Confirm Booking Details
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        
                            <div class="col-md-8">
                                <p><b>Name: </b><input type="text" class="form-control" wire:model="name" required/></p>
                                <p><b>Email: </b>{{$email}}</p>
                                <p><b>Phone: </b><input type="text" class="form-control" wire:model="mobile"required/></p>
                                <hr>
                                <p><b>Time: </b><input type="time" class="form-control" wire:model="time"required/></p>
                                <p><b>Date: </b><input type="date" class="form-control" wire:model="date"required/></p>
                                <p><b>Line1: </b><input type="text" class="form-control" wire:model="line1"required/></p>
                                <p><b>Line2: </b><input type="text" class="form-control" wire:model="line2"required/></p>
                                <p><b>City: </b><input type="text" class="form-control" wire:model="city"required/></p>
                                <p><b>State: </b><input type="text" class="form-control" wire:model="province"required/></p>
                                <p><b>Country: </b><input type="text" class="form-control" wire:model="country"required/></p>
                                <p><b>Zipcode: </b><input type="text" class="form-control" wire:model="zipcode"required/></p>
                            </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-footer">
                        {{-- <form>                                                
                            <input type="submit" class="btn btn-primary" name="submit"
                                value=" Book Now">
                                <div class="content-btn"><a href="{{route('customer.confirm_booking')}}"
                                    class="btn btn-primary">PAY NOW</a>
                                </div>
                        </form> --}}
                        <button name="confirmbooking" type="submit" class="btn btn-info pull right">UPDATE</button>
                        {{-- <button name="paynowbtn" type="submit" class="btn btn-info pull right" href="{{$service->link}}">Pay Now</button> --}}
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    