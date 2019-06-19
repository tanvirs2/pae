@if(Session::has('fail'))
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
	<i class="fa fa-check mx-2"></i>
	{!! Session::get('fail') !!}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
	<i class="fa fa-exclamation-triangle mx-2"></i>
	@foreach ($errors->all() as $error)
		<div>{!! $error !!}</div>
	@endforeach
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
	<i class="fa fa-check mx-2"></i>
	{!! Session::get('success') !!}
</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
	<i class="fa fa-check mx-2"></i>
	{!! Session::get('info') !!}
</div>
@endif
@if(Session::has('warning'))
<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
	<i class="fa fa-check mx-2"></i>
	{!! Session::get('warning') !!}
</div>
@endif