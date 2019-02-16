@extends('layouts.app')

@section('content')
    <title>Create project</title>
    <form method="POST" action="/projects">
        @csrf
        <h1 class="heading is-1">Create Project</h1>
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text"
                       name="title"
                       placeholder="Title"
                       class="input">
            </div>

            <label class="label" for="description">Description</label>
            <div class="control">
                <input type="text"
                       name="description"
                       placeholder="Description"
                       class="input">
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit"
                            class="button is-link">
                        Create
                    </button>
                    <a href="/projects">Cancel</a>
                </div>
            </div>
        </div>
    </form>
@endsection

