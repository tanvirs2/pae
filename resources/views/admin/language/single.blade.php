@extends('admin.layouts.master')

@section('admin-content')
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post">
                    <h4 class="blog-title">{{ $news->language_name }} </h4>
                    <span class="posted-by">Posted by Admin</span>

                    <div id="myCarousel" class="carousel slide top-10" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        {{--<div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ $news->getImage($pageData['imgFolder']) }}" alt="Los Angeles">
                            </div>

                        </div>--}}
                        <!-- Left and right controls -->
                    </div>
                    <div class="clearfix top-30">
                        <br>
                        <p class="text-capitalize"><b>home : </b>   {{ $news->home }}</p>
                        <p class="text-capitalize"><b>news : </b>   {{ $news->news }}</p>
                        <p class="text-capitalize"><b>contact : </b>    {{ $news->contact }}</p>
                        <p class="text-capitalize"><b>blog : </b>   {{ $news->blog }}</p>
                        <p class="text-capitalize"><b>partners : </b>   {{ $news->partners }}</p>
                        <p class="text-capitalize"><b>training : </b>   {{ $news->training }}</p>
                        <p class="text-capitalize"><b>conference : </b>     {{ $news->conference }}</p>
                        <p class="text-capitalize"><b>evaluation : </b>     {{ $news->evaluation }}</p>
                        <p class="text-capitalize"><b>post : </b>   {{ $news->post }}</p>
                        <p class="text-capitalize"><b>reports : </b>    {{ $news->reports }}</p>
                        <p class="text-capitalize"><b>article : </b>    {{ $news->article }}</p>
                        <p class="text-capitalize"><b>activity : </b>   {{ $news->activity }}</p>
                        <p class="text-capitalize"><b>recent_news : </b>    {{ $news->recent_news }}</p>
                        <p class="text-capitalize"><b>team : </b>   {{ $news->team }}</p>
                        <p class="text-capitalize"><b>about : </b>  {{ $news->about }}</p>
                        <p class="text-capitalize"><b>follow : </b>     {{ $news->follow }}</p>
                        <div>
                            <p>
                                {{ $news->lang_about }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
