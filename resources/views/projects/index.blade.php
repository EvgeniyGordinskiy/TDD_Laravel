@extends('layouts.app')

@section('content')
    <h4>Projects</h4>
    <ul>
        @foreach($projects as $project)
            <a href="{{ $project->path() }}">{{$project->title}}</a>
        @endforeach
    </ul>
@endsection
