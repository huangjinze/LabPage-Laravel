@extends('layouts.app')
{{--<script src="{{asset('Front_js/underscore-min.js')}}" type="text/javascript"></script>--}}
{{--<script src= "{{asset('Front_js/moment-2.2.1.js')}}" type="text/javascript"></script>--}}

@section('title', 'Projects/科研项目')

@section('navbar')
@parent

@endsection
@section('content')

<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Event_Single</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page"><a href="courses.html">Events</a> with Event_detail</li>
            </ul>
        </div>
  	</div>
  </div>
<div class="features">
	<div class="container">
        {!! $data->introduction !!}
	</div>
</div>
    <!-- //banner -->

@endsection



@section('footer')
	@parent
	<script src="{{asset('Front_js/jquery.countdown.js')}}"></script>
	<script src="{{asset('Front_js/script.js')}}"></script>
@endsection

