@extends('admin.layouts.master')

@section('admin-content')
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
        <a href="{{ route($pageData['route'].'-edit') }}" class="btn btn-success btn-icon-split float-right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
            <span class="text">Edit {{ $pageData['pageName'] }}</span>
        </a>
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-8 about-content">
                    about: {{ $others->about ?? null }}
                    <hr>Email: {{ $others->email ?? null }}
                    <hr>Phone: {{ $others->phone ?? null }}
                    <hr>Address: {{ $others->address ?? null }}
                    <hr>Facebook: {{ $others->fb_link ?? null }}
                    <hr>Facebook: {{ $others->tweet_link ?? null }}
                    <hr>Instagram: {{ $others->insta_link ?? null }}
                    <hr>LinkedIn: {{ $others->link_in ?? null }}
                    <hr>Skype: {{ $others->skype ?? null }}
                    <hr>Youtube: {{ $others->you_link ?? null }}
                    <hr>Recent: {{ $others->recent ?? null }}
                </div>

            </div>
        </div>
    </div>
@endsection
