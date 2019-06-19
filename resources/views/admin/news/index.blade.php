@extends('admin.layouts.master')

@section('admin-content')
    @include('admin.layouts.notice')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Newses</h1>

        <a href="{{ route('news-create') }}" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Add News</span>
        </a>

        <p class="mb-4">Dummy text </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">News Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Date</th>
                            <th>Create</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php $sl = 1 ?>

                        @foreach($newses as $news)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td><img src="{{ $news->newsImg() }}" style="width:100px;height:100px;"></td>
                                <td>{{ $news->title }}</td>
                                <td>{{ Str::limit($news->details, 50, '...') }}</td>
                                <td>{{ $news->date }}</td>
                                <td>{{ $news->created_at->diffForHumans() }}</td>
                                <td class="center-block">
                                    <a href="{{ route('news-edit', $news->id) }}"><i class="fa fa-2x fa-edit"></i></a>
                                    <a href="{{ route('news-show', $news->id) }}"><i class="fa fa-2x fa-file-alt"></i></a>
                                    <a onclick="return confirm('Are you sure to delete this news !')" href="{{ route('news-destroy', $news->id) }}"><i class="fa fa-2x fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection