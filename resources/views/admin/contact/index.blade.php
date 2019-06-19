@extends('admin.layouts.master')

@section('admin-content')
    @include('admin.layouts.notice')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Contacts</h1>


        <p class="mb-4">Dummy text </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contacts Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Massage</th>
                            <th>Create</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php $sl = 1 ?>

                        @foreach($objs as $obj)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $obj->name }}</td>
                                <td>{{ $obj->email }}</td>
                                <td>{{ $obj->phone }}</td>
                                <td>{{ Str::limit($obj->msg, 50, '...') }}</td>
                                <td>{{ $obj->created_at->diffForHumans() }}</td>
                                <td class="center-block">
                                    <a href="{{ route('contact-show', $obj->id) }}"><i class="fa fa-2x fa-file-alt"></i></a>
                                    <a onclick="return confirm('Are you sure to delete this massage !')" href="{{ route('contact-destroy', $obj->id) }}"><i class="fa fa-2x fa-trash-alt"></i></a>
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