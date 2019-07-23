@extends('website.layouts.master')

@section('website-content')
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2 style="font-size: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
        </div>
    </header>
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post">
                    <h4 class="blog-title">{{ $news->name }} </h4>
                    <span style="float: right" class="nav-social">
                                        <span class="follow-us-nav text-right">Share:</span>
                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                    </span>
                    <div id="myCarousel" class="carousel slide top-10" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ $news->getImage('team') }}" alt="Los Angeles">
                            </div>

                        </div>
                        <!-- Left and right controls -->
                    </div>
                    <div class="clearfix top-30">
                        <h4><b>{{ $news->position }}</b></h4>
                        <p>
                            {{ $news->details }}
                        </p>

                    </div>
                </div>
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
                <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                <div id="calendar"></div>
                <h3>Ads Title</h3>
                <img src="{{ asset('') }}assets/images/Rectangle-64.png" class="img-responsive">
                <h3>{{ $lang->follow }}</h3>
                <img src="{{ asset('') }}assets/images/facebook-page.JPG" class="img-responsive">
                <h3>Recent post</h3>
                <div style="background-image: url({{ asset('') }}assets/images/Recent-post.png)" class="recent-post">
                    <h3>Visiting Our offices</h3>
                </div>
                <h3>Our youtube video</h3>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/THymiwMZjDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    @endsection
