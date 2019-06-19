@extends('admin.layouts.master')

@section('admin-content')
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post">
                    <h4 class="blog-title">{{ $news->title }} </h4>
                    <span class="posted-by">Posted by Admin</span>

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
                                <img src="{{ $news->newsImg() }}" alt="Los Angeles">
                            </div>

                        </div>
                        <!-- Left and right controls -->
                    </div>
                    <div class="clearfix top-30">
                        <h4><b>{{ $news->title }}</b></h4>
                        <p>
                            {{ $news->details }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
