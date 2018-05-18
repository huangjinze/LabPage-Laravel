
@extends('layouts.app')

@section('title', 'Job Opening/工作机会')

@section('navbar')
@parent
@endsection

@section('content')

<!-- //banner -->
<div class="features">
	<div class="container">
		<h1>How to find us</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<div class="wrapper">
			<div class="col-md-4">
				<i class="fa fa-home  icon2"></i>
				<div class="box"   style="font-size: 20px">
					<p class="marTop9">
						{{ $contact->address }} {{ $contact->post_code }}<br>
						{{ $contact->university }}<br>
						{{ $contact->college }}</p>
				</div>
			</div>

			<div class="col-md-4">
				<i class="fa fa-phone  icon2"></i>
				<div class="box">
					<p class="marTop9"  style="font-size: 20px">{{ $contact->telephone }}<br>{{ $contact->phone }}</p>
				</div>
			</div>

			<div class="col-md-4">
				<i class="fa fa-envelope icon2"></i>
				<div class="box">
					<p class="m_6"><a href="#" class="link4" style="font-size: 25px">{{ $contact->mail }}</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection


@section('footer')
	@parent
@endsection