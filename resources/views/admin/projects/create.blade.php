
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
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
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
                    <label for="link" class="form-label">Link Github</label>
                    <input type="text" value="{{ old('link') }}" class="form-control" id="link" name="link">
                    @error('link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- image --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" value="{{ old('image') }}" class="form-control" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- type --}}
                <div class="mb-3">
                {{-- select for each type id  --}}
                    <label for="type_name" class="form-label">Type</label>
                    <select class="form-select" id="type_id" name="type_id">
                        <option selected disabled>Select a type</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('type_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- icon --}}
                <div class="mb-3">
                    <label for="type_icon" class="form-label">Type Icon</label>
                    <select class="form-select" id="type_id" name="type_id">
                        <option selected disabled>Select a icon</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->icon }}</option>
                        @endforeach
                    </select>
                    @error('type_icon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- technology --}}
                <div class="mb-3 ">
                    <h3>Choose Technologies</h3>
                    @foreach ($technologies as $i => $technology)
                    <div class="form-check">
                        <input type="checkbox" value="{{$technology->id}}" name="tags[]" id="tags{{$i}}" class="form-check-input" >
                        <label for="tags{{$i}}" class="form-check-label">{{$technology->name}}</label>
                    </div>
                    @endforeach
                </div>
                {{-- date  --}}
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" value="{{ old('published_at') }}" class="form-control" id="date" name="published_at">
                    @error('published_at')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- button to submit the form --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
