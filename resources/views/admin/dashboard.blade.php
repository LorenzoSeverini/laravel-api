@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col">
            {{-- Welcome to the admin dashboard  --}}
            <h1>Welcome to the admin dashboard</h1>
            <p>Here you can find all your stuff</p>
            <p>Some usefull links</p>
            <nav>
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
            </nav>
            {{-- jumbotron --}}
            <div class="jumbotron mt-5">
                <img src="https://via.placeholder.com/1500x500" alt="image" class="img-top img-thumbnail">
            </div>
            {{-- extras  --}}
            <div class="row mt-5">
                <div class="col-md-12">
                    <h1>Extras</h1>
                    <hr>
                </div>
                <div class="col-md-12 py-3">
                    <a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-2x fa-fw"></i></a>
                    <a target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-2x fa-fw"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin fa-2x fa-fw"></i></a>
                    <a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-2x fa-fw"></i></a>
                    <a target="_blank" href="https://www.github.com/"><i class="fa-brands fa-github fa-2x fa-fw"></i></a>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
