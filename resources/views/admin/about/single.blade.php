@extends('admin.layouts.master')

@section('admin-content')
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
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ $about->getImage('about') }}" alt="Los Angeles">
                            </div>
                        </div>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container bottom-30" style="padding-top: 30px;">
        <a href="{{ route($pageData['route'].'-edit') }}" class="btn btn-success btn-icon-split float-right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
            <span class="text">Edit {{ $pageData['pageName'] }}</span>
        </a>
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8 about-content">
                    <h3>Our vision</h3>
                    <blockquote>
                        <p>{{ $about->vision }}</p>
                    </blockquote>

                    <h3>Our values</h3>
                    <p>{{ $about->value }}</p>

                    <h3>Another text</h3>
                    <p>{{ $about->other }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
