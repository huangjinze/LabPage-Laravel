@extends('layouts.app')

@section('title', 'Team Member/教师团队')

@section('navbar')
@parent
@endsection
@section('content')

<div class="admission">
		<div class="container">
			<div class="faculty_top">
				@for ($i = 0; $i < count($datas); $i++)
					<div class="col-md-4 faculty_grid">
						<figure class="team_member">
							<img src="../uploads/{{$datas[$i]->image_url}}"
								 class="img-responsive wp-post-image" alt=""
							/>
							<div></div>
							<figcaption>
								<h3 class="person-title">
									<a href="/members/{{$datas[$i]->type}}/{{$datas[$i]->id}}">{{$datas[$i]->name}}</a>
								</h3>
								<span class="person-deg">{!! $datas[$i]->brief_introduction !!}</span>
								<div class="person-social">
									<a href="/members/{{$datas[$i]->type}}/{{$datas[$i]->id}}">
										<span><i class="fa fa-chain chain_1"></i>详细信息</span>
									</a>
								</div>
							</figcaption>
						</figure>
					</div>
					@if (($i+1) % 3 == 0)
						<div class="clearfix"> </div>
						<br>
					@endif
				@endfor
			</div>
			{{ $datas->links() }}
		</div>
	</div>

@endsection



@section('footer')
	@parent
	<script src="{{asset('Front_js/jquery.countdown.js')}}"></script>
	<script src="{{asset('Front_js/script.js')}}"></script>
@endsection