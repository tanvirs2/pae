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
                                <div class="form-group">
                                    <input type="file" name="img">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{ $news->name }}" type="text" name="name" class="form-control form-control-user" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{ $news->position }}" type="text" name="position" class="form-control form-control-user" placeholder="Position">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{ $news->facebook_link }}" type="text" name="facebook_link" class="form-control form-control-user" placeholder="Facebook">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{ $news->tweeter_link }}" type="text" name="tweeter_link" class="form-control form-control-user" placeholder="Tweeter">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="{{ $news->linked_link }}" type="text" name="linked_link" class="form-control form-control-user" placeholder="Linked In">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="details" class="form-control form-control-user" >{{ $news->details }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Update {{ $pageData['pageName'] }}
                                </button>

                            </form>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ $news->getImage($pageData['imgFolder']) }}" class="mt-4" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection