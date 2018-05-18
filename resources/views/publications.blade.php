
@extends('layouts.app')

@section('title', 'Publications/出版物')

@section('navbar')
@parent
@endsection

@section('content')

        <!-- //banner -->
<div class="features">
    <div class="container">
        @foreach ($publications as $publication)
            {!! $publication->introduction !!}
        @endforeach
        {{ $publications->links() }}
    </div>
</div>

@endsection


@section('footer')
    @parent
@endsection
