<div>
    <div><body style="background-color:#659DBD;"></div>
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <form wire:submit.prevent="bookForm">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        Update Profile
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
                    <div class="panel-heading">Payment Breakdown</div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td style="border-top: none;">Price</td>
                                <td style="border-top: none;"><span>RM</span> {{$service->price}}</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>1</td>
                            </tr>
                            @php
                                $total = $service->price;
                            @endphp
                            @if ($service->discount) 
                                @if ($service->discount_type=='fixed')
                                <tr>
                                    <td>Discount</td>
                                    <td>{{$service->discount}}</td>
                                </tr>
                                @php $total = $total-$service->discount; @endphp                                           
                                
                                @elseif($service->discount_type=='percent')
                                <tr>
                                    <td>Discount</td>
                                    <td>{{$service->discount}}</td>
                                    @php $total = $total-($total*$service->discount/100); @endphp
                                </tr>
                                
                                @endif                                          
                                
                            @endif
                            <tr>
                                <td>Total</td>
                                <td><span>RM</span> {{$total}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {{-- <form>                                                
                            <input type="submit" class="btn btn-primary" name="submit"
                                value=" Book Now">
                                <div class="content-btn"><a href="{{route('customer.confirm_booking')}}"
                                    class="btn btn-primary">PAY NOW</a>
                                </div>
                        </form> --}}
                        <button name="confirmbooking" type="submit" class="btn btn-info pull right">Proceed</button>
                        {{-- <button name="paynowbtn" type="submit" class="btn btn-info pull right" href="{{$service->link}}">Pay Now</button> --}}
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    