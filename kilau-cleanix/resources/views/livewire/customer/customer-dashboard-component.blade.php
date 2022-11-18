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
        <div class="opacy_bg_02" style="background-color:#659DBD;">
            <div class="container">
                <h1>Customer Dashboard</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Customer Dashboard</li>
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
                                            <a href ="{{route('user.profile')}}"  class="btn btn-info ">My Profile</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('user.editprofile')}}" class="btn btn-info " >Edit Profile</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('user.changepassword')}}" class="btn btn-info pull-right" >Change Password</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('home.service_categories')}}" class="btn btn-info pull-right" >Service List</a> 
                                        </div>
                                        <div class="col-md-2">
                                            <a href ="{{route('home.contact')}}" class="btn btn-info pull-right" >Contact Us</a> 
                                        </div>
                                        
                                        
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
