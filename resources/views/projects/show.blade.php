@extends('layouts.app')

@section('content')
    <header class="flex items-end mb-3 py-4">
        <p class="mr-auto text-grey text-sm">
            <a href="/projects" class="text-grey no-underline">My projects</a> / {{$project->title}}
        </p>
    </header>
    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-grey font-normal text-lg mb-3">Tasks</h2>
                    <div class="card mb-3">
                        dsdfsdf
                    </div>
                </div>
                <div>
                    <h2 class="text-grey font-normal text-lg mb-3">General Notes</h2>
                    <textarea class="card w-full" style="min-height: 200px">
                        dsdfsdf
                    </textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
@endsection

