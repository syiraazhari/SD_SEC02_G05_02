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
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02" style="background-color:#317773">
            <div class="container">
                <h1>Admin Dashboard</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Admin Dashboard</li>
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
                                    <div class="row" >
                                        <div class="col-md-2">
                                            <a href ="{{route('admin.service_categories')}}"  class="btn btn-info pull-right">Service Categories</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('admin.all_services')}}" class="btn btn-info pull-right" >All Services</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('admin.contacts')}}" class="btn btn-info pull-right" >All Contacts</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('admin.booking_history')}}" class="btn btn-info pull-right" >All Bookings</a> 
                                        </div>
                                        
                                        <!-- <div class="col-md-6">
                                            <a href ="{{route('admin.add_service')}}" class="btn btn-info pull-right">Add New</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
