<div>
<div><body style="background-color:#659DBD;"></div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Customer Dashboard
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    
                        <div class="col-md-8">

                            <div class="col-md-6">
                                 <a href ="{{route('user.profile')}}" class="btn btn-info pull-right">My Profile</a>
                            </div>

                            <div class="col-md-6">
                                 <a href ="{{route('user.changepassword')}}" class="btn btn-info pull-right">Change Password</a>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
