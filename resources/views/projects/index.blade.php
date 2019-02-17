@extends('layouts.app')

@section('content')
    <header class="flex items-end mb-3 py-4">
        <h2 class="mr-auto">Projects</h2>
        <a href="/projects/create" class="button">Create New Project</a>
    </header>
    <main class="lg:flex lg:flex-wrap -mx-3">
        @foreach($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include('projects.card')
            </div>
        @endforeach
    </main>
@endsection
