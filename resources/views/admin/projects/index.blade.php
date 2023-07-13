
@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Projects</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.projects.create') }}" class="text-decoration-none text-danger hover">Create</a>
        </div>
        <div class="col-md-12 py-3">
            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-danger hover">Dashboard</a>
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
                            <p><strong>Link :</strong><a target="_blank" href="{{ $project->link}}"> {{ $project->link}}</a></p>
                        </div>
                        <div class="card-footer">
                            {{-- link to show project id {{ $project->id }} --}}
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection



