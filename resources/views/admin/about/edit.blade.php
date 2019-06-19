@extends('admin.layouts.master')

@section('admin-content')
    @include('admin.layouts.notice')
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
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8 about-content">
                    <form action="{{ route($pageData['route'].'-update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <h3>Our vision</h3>
                        <div class="form-group">
                            <textarea name="vision" class="form-control">{{ $about->vision }}</textarea>
                        </div>

                        <h3>Our values</h3>
                        <div class="form-group">
                            <textarea name="value" class="form-control">{{ $about->value }}</textarea>
                        </div>
                        <h3>Another text</h3>
                        <div class="form-group">
                            <textarea name="other" class="form-control">{{ $about->other }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Update {{ $pageData['pageName'] }}
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
