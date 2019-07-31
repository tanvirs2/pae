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
                        <p class="text-capitalize"><b>our_facebook_page : </b>     {{ $news->our_facebook_page }}</p>
                        <p class="text-capitalize"><b>view_full_team_list : </b>     {{ $news->view_full_team_list }}</p>
                        <p class="text-capitalize"><b>view_full_list : </b>     {{ $news->view_full_list }}</p>
                        <p class="text-capitalize"><b>related_project : </b>     {{ $news->related_project }}</p>
                        <p class="text-capitalize"><b>call_us : </b>     {{ $news->call_us }}</p>
                        <p class="text-capitalize"><b>email_us : </b>     {{ $news->email_us }}</p>
                        <p class="text-capitalize"><b>find_us_on : </b>     {{ $news->find_us_on }}</p>
                        <p class="text-capitalize"><b>read_more : </b>     {{ $news->read_more }}</p>
                        <p class="text-capitalize"><b>subscribe_to_newsletter : </b>     {{ $news->subscribe_to_newsletter }}</p>
                        <p class="text-capitalize"><b>contacts : </b>     {{ $news->contacts }}</p>
                        <p class="text-capitalize"><b>address : </b>     {{ $news->address }}</p>
                        <p class="text-capitalize"><b>phone : </b>     {{ $news->phone }}</p>
                        <p class="text-capitalize"><b>email : </b>     {{ $news->email }}</p>
                        <p class="text-capitalize"><b>our_youtube_video : </b>     {{ $news->our_youtube_video }}</p>
                        <p class="text-capitalize"><b>recent_post : </b>     {{ $news->recent_post }}</p>
                        <p class="text-capitalize"><b>ads_title : </b>     {{ $news->ads_title }}</p>
                        <p class="text-capitalize"><b>visiting_our_offices : </b>     {{ $news->visiting_our_offices }}</p>
                        <p class="text-capitalize"><b>follow_us_on_facebook : </b>     {{ $news->follow_us_on_facebook }}</p>
                        <p class="text-capitalize"><b>send_message : </b>     {{ $news->send_message }}</p>
                        <p class="text-capitalize"><b>your_name : </b>     {{ $news->your_name }}</p>
                        <p class="text-capitalize"><b>your_email_address : </b>     {{ $news->your_email_address }}</p>
                        <p class="text-capitalize"><b>your_phone : </b>     {{ $news->your_phone }}</p>
                        <p class="text-capitalize"><b>your_message : </b>     {{ $news->your_message }}</p>
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
