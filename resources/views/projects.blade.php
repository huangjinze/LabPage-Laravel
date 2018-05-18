
@extends('layouts.app')

@section('title', 'Projects/科研项目')

@section('navbar')
    @parent
@endsection

@section('content')

        <!-- //banner -->
        <div class="features">
            <div class="container">
                @foreach ($projects as $project)
                    {!! $project->introduction !!}
                @endforeach
                {{ $projects->links() }}
            </div>
        </div>

@endsection


@section('footer')
    @parent
@endsection
