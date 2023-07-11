@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col">
            {{-- Welcome to the admin dashboard  --}}
            <h1>Welcome to the admin dashboard</h1>

            <p>Here you can find all your stuff</p>

            <p>Some usefull links</p>

            <ul>
                <li>
                    <a href="{{ route('admin.projects.index') }}">Projects</a>
                </li>
                <li>
                    <a href="{{ route('admin.projects.create') }}">Create new project</a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/">Go To Git Hub</a>
                </li>
            </ul>

        </div>
	</div>
</div>
@endsection
