
@extends('layouts.app')

@section('title', 'Job Opening/工作机会')

@section('navbar')
@parent
@endsection

@section('content')

		<!-- //banner -->
<div class="features">
	<div class="container">
		@foreach ($jobs as $job)
			{!! $job->introduction !!}
		@endforeach
		{{ $jobs->links() }}
	</div>
</div>

@endsection


@section('footer')
	@parent
@endsection
