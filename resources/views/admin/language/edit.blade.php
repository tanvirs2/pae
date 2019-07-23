@extends('admin.layouts.master')

@section('admin-content')
    @include('admin.layouts.notice')
    <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit {{ $pageData['pageName'] }}!</h1>
                            </div>
                            <form class="user" action="{{ route($pageData['route'].'-update', $news->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                {{--<div class="form-group">
                                    <input type="file" name="img">
                                </div>--}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="language_name" value="{{ $news->language_name }}" class="form-control form-control-user" placeholder="language_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="home" value="{{ $news->home }}" class="form-control form-control-user" placeholder="home">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="news" value="{{ $news->news }}" class="form-control form-control-user" placeholder="news">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="contact" value="{{ $news->contact }}" class="form-control form-control-user" placeholder="contact">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="blog" value="{{ $news->blog }}" class="form-control form-control-user" placeholder="blog">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="partners" value="{{ $news->partners }}" class="form-control form-control-user" placeholder="partners">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="training" value="{{ $news->training }}" class="form-control form-control-user" placeholder="training">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="conference" value="{{ $news->conference }}" class="form-control form-control-user" placeholder="conference">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="evaluation" value="{{ $news->evaluation }}" class="form-control form-control-user" placeholder="evaluation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="post" value="{{ $news->post }}" class="form-control form-control-user" placeholder="post">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="reports" value="{{ $news->reports }}" class="form-control form-control-user" placeholder="reports">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="article" value="{{ $news->article }}" class="form-control form-control-user" placeholder="article">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="activity" value="{{ $news->activity }}" class="form-control form-control-user" placeholder="activity">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="recent_news" value="{{ $news->recent_news }}" class="form-control form-control-user" placeholder="recent_news">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="team" value="{{ $news->team }}" class="form-control form-control-user" placeholder="team">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="about" value="{{ $news->about }}" class="form-control form-control-user" placeholder="about">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="follow" value="{{ $news->follow }}" class="form-control form-control-user" placeholder="follow">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="lang_about" class="form-control form-control-user" >{{ $news->lang_about }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Update {{ $pageData['pageName'] }}
                                </button>

                            </form>

                        </div>
                    </div>
                    {{--<div class="col-lg-5">
                        <img src="{{ $news->getImage($pageData['imgFolder']) }}" class="mt-4" alt="">
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection