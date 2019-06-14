@extends('website.layout.master')

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
                    <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                    <span class="posted-by">Posted by Admin</span>
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
                                <img src="{{ asset('') }}assets/images/gallery-image.png" alt="Los Angeles">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <span class="day">4th</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <span class="day">4th</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <img src="{{ asset('') }}assets/images/gallery-image.png" alt="Los Angeles">
                            </div>
                            <div class="item">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <span class="day">4th</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <img src="{{ asset('') }}assets/images/gallery-image.png" alt="Los Angeles">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="clearfix top-30">
                        <h4><b>Paragraph Title</b></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <blockquote>
                            <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                        </blockquote>
                        <h4><b>Paragraph Title</b></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <ul>
                            <li>For 50 years, WWF has been protecting the future of nature.</li>
                            <li>For 50 years, WWF has been protecting</li>
                            <li>the future of nature.</li>
                        </ul>
                        <h4><b>Paragraph Title</b></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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
                <h3>Follow us on Facebook</h3>
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
