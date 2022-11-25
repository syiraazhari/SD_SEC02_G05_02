<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"><div><img src="{{ asset('images\slidebackg\bookinglist.JPG')}}" alt="Background"></div></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>BOOKING</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>BOOKING</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            ALL BOOKING
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" roles="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                         <tr>
                                            <th>#</th> 
                                            <th>ServiceID</th> 
                                            <th>UserID</th> 
                                            <th>Phone Number</th> 
                                            <th>Address ln 1</th>
                                            <th>Address ln 2</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>Zipcode</th>
                                            <th>Time / Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{$booking->id}}</td>
                                            <td>{{$booking->service_id}}</td>
                                            <td>{{$booking->user_id}}</td>
                                            <td>{{$booking->mobile}}</td>
                                            <td>{{$booking->line1}}</td>
                                            <td>{{$booking->line2}}</td>
                                            <td>{{$booking->city}}</td>
                                            <td>{{$booking->province}}</td>
                                            <td>{{$booking->country}}</td>
                                            <td>{{$booking->zipcode}}</td>
                                            <td>{{$booking->time}} / {{$booking->date}}</td>
                                            <td>
                                                <a href="{{route('admin.edit_booking',['booking_id'=>$booking->id])}}"><button class="btn btn-primary">Edit</button></a>
                                            </td>
                                            <td>
                                                <a href="#" onclick="confirm('Are you sure you want to delete this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteOrderHistory({{$booking->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a> 
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                                <h5 style="color: grey">Detailed data can be referred through collected data in database</h5>
                                {{-- {{$bookings->links()}}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
