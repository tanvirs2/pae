@extends('admin.layouts.master')

@section('admin-content')
    @include('admin.layouts.notice')
    <style>
        input{
            font-weight: bold !important;
            color: black !important;
        }
    </style>
    <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create a {{ $pageData['pageName'] }}!</h1>
                            </div>
                            <form class="user" action="{{ route($pageData['route'].'-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{--<div class="form-group">
                                    <input type="file" name="img">
                                </div>--}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="language_name" class="form-control form-control-user" placeholder="language_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="home" class="form-control form-control-user" placeholder="home">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="news" class="form-control form-control-user" placeholder="news">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="contact" class="form-control form-control-user" placeholder="contact">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="blog" class="form-control form-control-user" placeholder="blog">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="partners" class="form-control form-control-user" placeholder="partners">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="training" class="form-control form-control-user" placeholder="training">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="conference" class="form-control form-control-user" placeholder="conference">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="evaluation" class="form-control form-control-user" placeholder="evaluation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="post" class="form-control form-control-user" placeholder="post">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="reports" class="form-control form-control-user" placeholder="reports">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="article" class="form-control form-control-user" placeholder="article">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="activity" class="form-control form-control-user" placeholder="activity">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="recent_news" class="form-control form-control-user" placeholder="recent_news">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="team" class="form-control form-control-user" placeholder="team">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="about" class="form-control form-control-user" placeholder="about">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="follow" class="form-control form-control-user" placeholder="follow">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="our_facebook_page" class="form-control form-control-user" placeholder="our_facebook_page">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="view_full_team_list" class="form-control form-control-user" placeholder="view_full_team_list">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="view_full_list" class="form-control form-control-user" placeholder="view_full_list">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="related_project" class="form-control form-control-user" placeholder="related_project">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="call_us" class="form-control form-control-user" placeholder="call_us">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email_us" class="form-control form-control-user" placeholder="email_us">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="find_us_on" class="form-control form-control-user" placeholder="find_us_on">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="read_more" class="form-control form-control-user" placeholder="read_more">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="subscribe_to_newsletter" class="form-control form-control-user" placeholder="subscribe_to_newsletter">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="contacts" class="form-control form-control-user" placeholder="contacts">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="address" class="form-control form-control-user" placeholder="address">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" class="form-control form-control-user" placeholder="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="email" class="form-control form-control-user" placeholder="email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="our_youtube_video" class="form-control form-control-user" placeholder="our_youtube_video">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="recent_post" class="form-control form-control-user" placeholder="recent_post">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="ads_title" class="form-control form-control-user" placeholder="ads_title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="visiting_our_offices" class="form-control form-control-user" placeholder="visiting_our_offices">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="follow_us_on_facebook" class="form-control form-control-user" placeholder="follow_us_on_facebook">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="send_message" class="form-control form-control-user" placeholder="send_message">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="your_name" class="form-control form-control-user" placeholder="your_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="your_email_address" class="form-control form-control-user" placeholder="your_email_address">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="your_phone" class="form-control form-control-user" placeholder="your_phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="your_message" class="form-control form-control-user" placeholder="your_message">
                                    </div>
                                </div>










                                <div class="form-group">
                                    <textarea name="lang_about" class="form-control form-control-user" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save {{ $pageData['pageName'] }}
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection