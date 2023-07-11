
@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')

<div class="container-fluid mt-4">

    <h1>Create New Project</h1>

    {{-- validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{-- loop to show all the errors --}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        <div>
    @endif

    <a class="text-decoration-none text-danger hover" href="{{ route('admin.projects.index') }}">Projects list</a>
    {{-- form to create a new project  --}}
    <div class="row g-3 py-4">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            @method('POST')
            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" value="{{ old('title') }}" class="form-control" id="title" name="title">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" value="{{ old('slug') }}" class="form-control" id="slug" name="slug">
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- {{-- excerpt  --}}
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" cols="30" rows="5">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- link git hub --}}
            <div class="mb-3">
                <label for="link_github" class="form-label">Link Github</label>
                <input type="text" value="{{ old('link_github') }}" class="form-control" id="link_github" name="link_github">
                @error('link_github')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- image --}}
            <div class="mb-3">
                <label for="image_path" class="form-label">Image</label>
                <input type="text" value="{{ old('image_path') }}" class="form-control" id="image_path" name="image_path">
                @error('image_path')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- date  --}}
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" value="{{ old('published_at') }}" class="form-control" id="date" name="date">
                @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- button to submit the form --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
