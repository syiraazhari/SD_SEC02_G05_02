<div>
<div><body style="background-color:#659DBD;"></div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Update Profile
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form wire:submit.prevent="updateProfile">
                        <div class="col-md-4">
                            @if($newimage)
                                <img src ="{{$newimage->temporaryUrl()}}" width="100%"/>
                            @elseif($image)
                                <img src ="{{asset('images/profile')}}/{{ $image }}" width= "100%" alt="image 1"/>
                            @else
                                <img src ="{{asset('images/profile/profile.png')}}" width="100%" alt="image 2"/>
                            @endif

                            <input type="file" class="form-control" wire:model="newimage" >
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b><input type="text" class="form-control" wire:model="name" required/></p>
                            <p><b>Email: </b>{{$email}}</p>
                            <p><b>Phone: </b><input type="text" class="form-control" wire:model="mobile"required/></p>
                            <hr>
                            <p><b>Line1: </b><input type="text" class="form-control" wire:model="line1"required/></p>
                            <p><b>Line2: </b><input type="text" class="form-control" wire:model="line2"required/></p>
                            <p><b>City: </b><input type="text" class="form-control" wire:model="city"required/></p>
                            <p><b>State: </b><input type="text" class="form-control" wire:model="province"required/></p>
                            <p><b>Country: </b><input type="text" class="form-control" wire:model="country"required/></p>
                            <p><b>Zipcode: </b><input type="text" class="form-control" wire:model="zipcode"required/></p>
                            <button type="submit" class="btn btn-info pull right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
