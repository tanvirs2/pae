@if(Session::has('fail'))
	<div class="alert alert-danger">
		<strong>Danger!</strong> {!! Session::get('fail') !!}.
	</div>
@endif

@if($errors->any())
	<div class="alert alert-warning">
		<strong>Warning!</strong>
		@foreach ($errors->all() as $error)
			<div>{!! $error !!}</div>
		@endforeach
	</div>
@endif

@if(Session::has('success'))
	<div class="alert alert-success">
		<strong>Success!</strong> {!! Session::get('success') !!}
	</div>
@endif

@if(Session::has('info'))
	<div class="alert alert-info">
		<strong>Info!</strong> {!! Session::get('info') !!}
	</div>
@endif

@if(Session::has('warning'))
	<div class="alert alert-warning">
		<strong>Warning!</strong>
		{!! Session::get('warning') !!}
	</div>
@endif