@extends('website.layouts.master')

@section('website-content')
    <header class="py-5 bg-image-full bg-image-about">
        <div class="layer">
            <h2>About Us</h2>
        </div>
    </header>
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h4 class="breadcrumbs">Who we are</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8" style="padding-top: 1%;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ $about->getImage('about') }}" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>Calendar of events</h4>
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bottom-30" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 about-content">
                    <h3>Our vision</h3>
                    <p>{{ $about->vision }}</p>

                    <h3>Our values</h3>
                    <p>{{ $about->value }}</p>

                    <h3>Another text</h3>
                    <p>{{ $about->other }}</p>

                </div>
                <div class="col-md-4">
                    <h3>Ads Title</h3>
                    <img src="assets/images/Rectangle-64.png" class="img-responsive">
                    <h3>Follow us on Facebook</h3>
                    <img src="assets/images/facebook-page.JPG" class="img-responsive">
                    <h3>Recent post</h3>
                    <div style="background-image: url(assets/images/Recent-post.png)" class="recent-post">
                        <!--<div class="layer">-->
                        <!--<img src="assets/images/Recent-post.png" class="img-responsive">-->
                        <h3>Visiting Our offices</h3>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid know-us">
        <div class="container">
            <div class="row">
                <h2>&nbsp;Need to <b>know more?</b></h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-phone-square"></i>
                    <span>Call Us</span>
                    <p>+{{ $others->phone ?? null }}</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-phone-square"></i>
                    <span>Email Us</span>
                    <p style="font-size: 25px;">{{ $others->email ?? null }} </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-map"></i>
                    <span>Find Us On</span>
                    <p style="font-size: 25px;">Google Maps</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumbs"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;{{ $lang->recent_news }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="example-2 card" >
                    <div class="wrapper" style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
                        <div class="header">
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <span class="day">4th</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                        </div>
                        <div class="data">
                            <div class="content">
                                <h1 class="title"><a href="#">Ceremony of youth day</a></h1>
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example-2 card" >
                    <div class="wrapper" style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
                        <div class="header">
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <span class="day">4th</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                        </div>
                        <div class="data">
                            <div class="content">
                                <h1 class="title"><a href="#">Ceremony of youth day</a></h1>
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example-2 card" >
                    <div class="wrapper" style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
                        <div class="header">
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <span class="day">4th</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                        </div>
                        <div class="data">
                            <div class="content">
                                <h1 class="title"><a href="#">Ceremony of youth day</a></h1>
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="#" class="view-more">View List &nbsp; <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endsection