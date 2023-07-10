
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary my-3">Create</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Project Description</th>
                        <th>Project Image</th>
                        <th>Project Link</th>
                        <th>Project Category</th>
                        <th>Project Tags</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->project_description }}</td>
                        <td>{{ $project->project_image }}</td>
                        <td>{{ $project->project_link }}</td>
                        <td>{{ $project->project_category }}</td>
                        <td>{{ $project->project_tags }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- paginate the projects --}}
            {{ $projects->links() }}
        </div>
    </div>
</div>

@endsection



