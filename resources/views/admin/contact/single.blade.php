@extends('admin.layouts.master')

@section('admin-content')
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post">
                    <h3 class="blog-title"><b>From: </b>{{ $contact->name }} </h3>
                    <p>
                        <b>Email: </b>{{ $contact->email }} <br>
                        <b>Phone: </b>{{ $contact->phone }}<br>
                        Time: {{ $contact->created_at->diffForHumans() }}
                    </p>
                    <div id="myCarousel" class="mb-3">

                        <div class="carousel-inner">
                            <div class="card card-body p-3">
                                {{ $contact->msg }}
                            </div>

                        </div>
                        <!-- Left and right controls -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
