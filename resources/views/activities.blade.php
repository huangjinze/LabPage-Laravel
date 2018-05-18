
@extends('layouts.app')

@section('title', 'Social Activities/社会活动')

@section('navbar')
@parent
@endsection

@section('content')

		<!-- //banner -->
<div class="features">
	<div class="container">
		@foreach ($activities as $activity)
			{!! $activity->introduction !!}
		@endforeach
		{{ $activities->links() }}
	</div>
</div>

@endsection


@section('footer')
	@parent
@endsection
