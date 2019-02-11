@extends('layouts.app')

@section('content')
    <title>{{ $project->title }}</title>
    {{ $project->description }}
@endsection

