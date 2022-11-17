<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach ($slides as $slide)
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                    data-saveperformance="off" data-title="Slide">
                    <img src="{{ asset('images/slider')}}/{{$slide->image}}" alt="{{$slide->title}}" data-bgposition="center center"
                        data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                        data-bgfitend="100" data-bgpositionend="right center">
                </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:#fff;">BOOK A CLEANING SERVICE</h2>
                <p class="lead">Book a cleaning service at very affordable price. </p>
            </div>
            <div class="filter-header">
                <form id="sform" action="searchservices" method="post">                        
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                        class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
    </section>
    <div><body style="background-color:#659DBD;"></div>
    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($scategories as $scategory)
                                <li data-toggle="tooltip" title="" data-original-title="{{$scategory->name}}"> 
                                    <a href="{{route('home.services_by_category',['category_slug'=>$scategory->slug])}}">
                                        <img src="{{ asset('images\categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>KilauCleanix <span>Choice</span> of Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                    <div class="portfolioContainer" style="margin-top: -50px;">
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-dry-servicing.html">
                                <div class="img-hover">
                                    <img src="{{ asset('images\services\1.png')}}" alt="AC Dry Servicing"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Dry Servicing</h3>
                                    <hr class="separator">
                                    <p>AC Dry Servicing</p>
                                    <div class="content-btn"><a href="service-details/ac-dry-servicing.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>RM</span><b>From</b>300</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-installation.html">
                                <div class="img-hover">
                                    <img src="{{ asset('images\services\2.png')}}" alt="AC Installation"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Installation</h3>
                                    <hr class="separator">
                                    <p>AC Installation</p>
                                    <div class="content-btn"><a href="service-details/ac-installation.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>RM</span><b>From</b>320</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-gas-top-up.html">
                                <div class="img-hover">
                                    <img src="{{ asset('images\services\3.png')}}" alt="AC Gas Top Up"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Gas Top Up</h3>
                                    <hr class="separator">
                                    <p>AC Gas Top Up</p>
                                    <div class="content-btn"><a href="service-details/ac-gas-top-up.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>RM</span><b>From</b>320</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                            style="padding-right: 5px;padding-left: 5px;">
                            <a class="g-list" href="service-details/ac-gas-refill.html">
                                <div class="img-hover">
                                    <img src="{{ asset('images\services\4.png')}}" alt="AC Gas Refill"
                                        class="img-responsive">
                                </div>
                                <div class="info-gallery">
                                    <h3>AC Gas Refill</h3>
                                    <hr class="separator">
                                    <p>AC Gas Refill</p>
                                    <div class="content-btn"><a href="service-details/ac-gas-refill.html"
                                            class="btn btn-primary">Book Now</a></div>
                                    <div class="price"><span>RM</span><b>From</b>510</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>WELCOME TO DIVERSIFIED</h2>
                                <p class="lead">
                                    Book best cleaning services at one place.
                                    <span class="line"></span>
                                </p>

                                <p>Find a wide variety of home cleaning services.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">
                                <li>
                                    <a href="servicesbycategory/1.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969345.png')}}"></i>
                                            <h5>AC</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/3.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969409.png')}}"></i>
                                            <h5>Plumbing</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/4.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969419.png')}}"></i>
                                            <h5>Electrical</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/6.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969446.png')}}"></i>
                                            <h5>Home Cleaning</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/8.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969464.png')}}"></i>
                                            <h5>Pest Control</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/11.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969512.png')}}"></i>
                                            <h5>Computer Repair</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/12.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969522.png')}}"></i>
                                            <h5>TV</h5>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="servicesbycategory/13.html">
                                        <div class="item-service-line">
                                            <i class="fa"><img class="icon-img"
                                                    src="{{ asset('images\categories\1521969536.png')}}"></i>
                                            <h5>Refrigerator</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span>Appliance</span>Services</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>AC Wet Servicing</h3>
                            <hr class="separator">
                            <p>AC Wet Servicing</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/bedroom-deep-cleaning.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Bedroom Deep Cleaning</h3>
                            <hr class="separator">
                            <p>Bedroom Deep Cleaning</p>
                            <div class="content-btn"><a href="service-details/bedroom-deep-cleaning.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>300</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/dining-chair-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Dining Chair Shampooing</h3>
                            <hr class="separator">
                            <p>Dining Chair Shampooing</p>
                            <div class="content-btn"><a href="service-details/dining-chair-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>400</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/carpet-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Carpet Shampooing</h3>
                            <hr class="separator">
                            <p>Carpet Shampooing</p>
                            <div class="content-btn"><a href="service-details/carpet-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/fabric-sofa-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Fabric Sofa Shampooing</h3>
                            <hr class="separator">
                            <p>Fabric Sofa Shampooing</p>
                            <div class="content-btn"><a href="service-details/fabric-sofa-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>211</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/bathroom-deep-cleaning.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Bathroom Deep Cleaning</h3>
                            <hr class="separator">
                            <p>Bathroom Deep Cleaning</p>
                            <div class="content-btn"><a href="service-details/bathroom-deep-cleaning.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>233</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/floor-scrubbing-polishing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Floor Scrubbing &amp; Polishing</h3>
                            <hr class="separator">
                            <p>Floor Scrubbing &amp; Polishing</p>
                            <div class="content-btn"><a href="service-details/floor-scrubbing-polishing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>411</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/mattress-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Mattress Shampooing</h3>
                            <hr class="separator">
                            <p>Mattress Shampooing</p>
                            <div class="content-btn"><a href="service-details/mattress-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>222</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/kitchen-deep-cleaning.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbmbnail.jpg')}}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Kitchen Deep Cleaning</h3>
                            <hr class="separator">
                            <p>Kitchen Deep Cleaning</p>
                            <div class="content-btn"><a href="service-details/kitchen-deep-cleaning.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>RM</span><b>From</b>111</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
