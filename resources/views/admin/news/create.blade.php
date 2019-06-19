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
                                <h1 class="h4 text-gray-900 mb-4">Create a News!</h1>
                            </div>
                            <form class="user" action="{{ route('news-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="img">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="title" class="form-control form-control-user" placeholder="Title">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" name="date" class="form-control form-control-user" placeholder="Details">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="details" class="form-control form-control-user" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save News
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection