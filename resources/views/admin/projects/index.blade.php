
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary my-3">Create</a>
        </div>
    </div>
    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{ $project->title }}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('images/' . $project->image_path) }}" alt="image" width="100%">
                        <p>{{ $project->description }}</p>
                        <p>{{ $project->created_at }}</p>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection



