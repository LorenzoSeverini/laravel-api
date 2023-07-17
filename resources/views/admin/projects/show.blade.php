
@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Project details</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    {{ $project->title }}
                </div>
                <div class="card-body">
                    <img src="{{ $project->image }}" alt="image" class="img-top img-thumbnail">
                    <div class="card-tex py-3">
                        <p><strong>Description :</strong> {{ $project->description }} </p>
                        <p><strong>Link :</strong><a target="_blank" href="{{ $project->link}}"> {{ $project->link}}</a></p>
                        <p><strong>Type :</strong> {{ $project->type ? $project->type->name : 'type null' }} </p>
                        <p><strong>Type Icon :</strong> {{ $project->type->icon }} </p>
                        <p>
                            <strong>Technology :</strong>
                            @foreach ($project->technologies as $technology)
                                {{ $technology->name }}{{ $loop->last ? '' : ', ' }}
                            @endforeach
                        </p>
                        <p><strong>Date of creation:</strong> {{ $project->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>Update:</strong> {{ $project->updated_at->format('d/m/Y H:i') }}</p>
                        {{-- img upload show  --}}
                        {{-- <img src="{{ asset('storage/' . ) }}" alt="image" class="img-top img-thumbnail"> --}}
                    </div>
                    <div class="card-footer">
                        {{-- link to show project id {{ $project->id }} --}}
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
