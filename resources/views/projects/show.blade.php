@extends('layouts.app')

@section('content')
    <title>{{ $project->title }}</title>
    {{ $project->description }}
    <a href="/projects">Go Back</a>
@endsection

