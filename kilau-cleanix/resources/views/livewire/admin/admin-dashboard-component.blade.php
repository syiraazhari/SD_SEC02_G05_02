<div>
<div><body style="background-color:#77DD77;"></div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    Admin Dashboard
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    
                        <div class="col-md-8">

                            <div class="col-md-6">
                                 <a href ="{{route('admin.service_categories')}}" class="btn btn-info pull-right">All Categories</a>
                            </div>

                            <div class="col-md-6">
                                 <a href ="{{route('admin.all_services')}}" class="btn btn-info pull-right">All Services</a>
                            </div>
                            
                            <div class="col-md-6">
                                 <a href ="{{route('admin.contacts')}}" class="btn btn-info pull-right">All Contacts</a>
                            </div>
                            
                            <div class="col-md-6">
                                 <a href ="{{route('admin.booking_history')}}" class="btn btn-info pull-right">All Bookings</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
