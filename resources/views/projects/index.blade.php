@extends('layouts.app')

@section('content')
    <div class="flex items-center mb-4">
        <h1 class="mr-auto">Projects</h1>
        <a href="/projects/create">Create New Project</a>
    </div>
    <div class="flex">
        @foreach($projects as $project)
        <div class="bg-white mr-4 p-5 rounded shadow w-1/3" style="height: 200px">
            <h3 class="text-xl font-normal py-4">{{str_limit($project->title,20)}}</h3>
            <div class="text-grey">{{str_limit($project->description, 100)}}</div>
        </div>
        @endforeach
    </div>
@endsection
