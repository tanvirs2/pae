@extends('website.layouts.master')

@section('website-content')
<div class="simple-slider">
    <div class="swiper-container horizontal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-container vertical">
                    <div class="swiper-wrapper vertical">
                        <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/slider-01.jpg);">
                            <div class="slider-layer">
                                <div style="width: 100%;" class="slider-text">
                                    <h1 style="text-align: left">Welcome to Pae Essamba</h1>
                                    <h3>The <span>Student support</span></h3>
                                    <h3><span>program </span>website</h3>
                                    <div style="padding-top: 1%;">
                                        <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                        <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
                            <div class="col-md-12">
                                <h1>Welcome to Pae Essamba</h1>
                            </div>
                        </div>
                        <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
                            <div class="col-md-12">
                                <h1>Welcome to Pae Essamba</h1>
                            </div>
                        </div>
                        <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
                            <div class="col-md-12">
                                <h1>Welcome to Pae Essamba</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination vertical"></div>
                </div></div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <h4 class="breadcrumbs"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;Recent Activities</h4>
            </div>
            <div class="col-md-4">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Enter a keyword">
                    <span class="input-group-btn">
              <button class="btn-search" type="button">
              <i class="fa fa-search" aria-hidden="true"></i>
             </button>
             </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8" style="padding-top: 1%;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('') }}assets/images/gallery-image.png" alt="Los Angeles">
                        </div>
                        <div class="item">
                            <img src="{{ asset('') }}assets/images/gallery-image.png" alt="Los Angeles">
                        </div>
                        <div class="item">
                            <img src="{{ asset('') }}assets/images/gallery-image.png" alt="Los Angeles">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></spas>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>Calendar of events</h4>
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container" style="padding-top: 30px;padding-bottom: 35px;">
    <div class="row">
        <div class="col-md-12">
            <h4 class="breadcrumbs"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Recent News</h4>
        </div>
    </div>
    <div class="row">
        @foreach($newses as $news)
        <div class="col-md-4">
            <div class="example-2 card" >
                <div class="wrapper" style="background:url({{ $news->newsImg() }}) center/cover no-repeat;background-size: auto;">
                    <div class="header">
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            {{ $news->date }}
                        </div>
                    </div>
                    <div class="data">
                        <div class="content">
                            <h1 class="title"><a href="#">{{ $news->title }}</a></h1>
                            <p class="text">{{ Str::limit($news->details, 50, '...') }}</p>
                            <span class="author">published by Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12">
            <a href="{{ route('home-news-list') }}" class="view-more">View List &nbsp; <i class="fa fa-arrow-right"></i></a>
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
                <p style="font-size: 25px;">{{ $others->email ?? null }}</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <i class="fa fa-map"></i>
                <span>Find Us On</span>
                <p style="font-size: 25px;">Google Maps</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #00000012;">
    <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumbs"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Our Team</h4>
                <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Aenean bibendum diam ut lectus pulvinar dignissim. Mauris eu nibh eu dolor cursus fringilla.</p>
            </div>
        </div>
        <div class="row">
            @foreach($teams as $team)
            <div class="col-md-3">
                <div class="team" >
                    <div class="wrapper" style="background:url({{ $team->getImage('team') }}) center/cover no-repeat;">
                        <div class="test">
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                            <div class="data">
                                <div class="content">
                                    <h4 class="title">{{ $team->name }}</h4>
                                    <h5>{{ $team->position }}</h5>
                                    <a class="view-profile" href="{{ route('home-single-team', $team->id) }}">View profile &nbsp;<i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <a href="{{ route('home-team-list') }}" class="view-more">View full team list &nbsp; <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Related Project</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="projects">
                <div style="border: 1px solid #74737396;border-top-left-radius: 22px;">
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        @foreach($projects as $project)
                            <div class="btn-group" role="group">
                                <button type="button" class="btn project-active btn-white" href="#tab{{ $project->id }}" data-toggle="tab">
                                    <div class="hidden-xs">Trainee<br>student project</div>
                                </button>
                            </div>

                        @endforeach

                    </div>
                    <div class="well" style="background-color: #EEEEEE; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                        <div class="tab-content">
                            @foreach($projects as $project)
                            <div class="tab-pane fade in active" id="tab{{ $project->id }}">
                                <h3>Title of the main project</h3>
                                <span class="dot"></span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('home-project-list') }}" class="view-more">View full list &nbsp; <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
