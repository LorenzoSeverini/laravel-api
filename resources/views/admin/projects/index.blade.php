
@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary my-3">Create</a>
        </div>
    </div>
    <div class="row">
        @foreach($projects as $project)
            <div class="col-xl-4 col-lg-6 col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        {{ $project->title }}
                    </div>
                    <div class="card-body">
                        <img src="{{ $project->image }}" alt="image" class="img-top img-thumbnail">
                        <div class="card-tex py-3">
                            <p><strong>Expert :</strong> {{ $project->excerpt }}</p>
                            <p><strong>Description :</strong> {{ $project->description }} </p>
                            <p><strong>Slug :</strong> {{ $project->slug }} </p>
                            <strong>Link :</strong><a target="_blank" href="{{ $project->link}}"> {{ $project->link}} </a>
                            <p><strong>Date of creation :</strong> {{ $project->created_at }} </p>
                            <p><strong>Update :</strong> {{ $project->updated_at }} </p>
                        </div>
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



