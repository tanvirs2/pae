@extends('admin.layouts.master')

@section('admin-content')
    @include('admin.layouts.notice')
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h4 class="breadcrumbs">{{ $pageData['pageName'] }}</h4>
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
                        About: <input type="text" class="form-control" name="about" value="{{ $others->about ?? null }}"><hr>
                        Email: <input type="text" class="form-control" name="email" value="{{ $others->email ?? null }}"><hr>
                        Phone: <input type="text" class="form-control" name="phone" value="{{ $others->phone ?? null }}"><hr>
                        Address: <input type="text" class="form-control" name="address" value="{{ $others->address ?? null }}"><hr>
                        Facebook: <input type="text" class="form-control" name="fb_link" value="{{ $others->fb_link ?? null }}"><hr>
                        Tweeter: <input type="text" class="form-control" name="tweet_link" value="{{ $others->tweet_link ?? null }}"><hr>
                        Instagram: <input type="text" class="form-control" name="insta_link" value="{{ $others->insta_link ?? null }}"><hr>
                        LinkedIn: <input type="text" class="form-control" name="link_in" value="{{ $others->link_in ?? null }}"><hr>
                        Skype: <input type="text" class="form-control" name="skype" value="{{ $others->skype ?? null }}"><hr>
                        Youtube: <input type="text" class="form-control" name="you_link" value="{{ $others->you_link ?? null }}"><hr>
                        Recent: <input type="text" class="form-control" name="recent" value="{{ $others->recent ?? null }}"><hr>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Update {{ $pageData['pageName'] }}
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
