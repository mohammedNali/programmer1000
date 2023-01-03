@extends('layout')

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go Back</a>
                <div class="border rounded mt-5 p-4">
                    <h1>Create a New Post</h1>
                    <p>Fill and submit this form to create a post</p>
                    <hr>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
{{--                                @if($errors->any())--}}
{{--                                    <div class="alert alert-danger">--}}
{{--                                        <ul>--}}
{{--                                            @foreach($errors->all() as $error)--}}
{{--                                                <li>{{ $error }}</li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control @error('title', 'post') is-invalid @enderror"
                                       name="title" value="{{ old('title') }}" placeholder="Enter Post Title">
                                @error('title', 'post')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="control-group col-12">
                                <label for="body">Post Body</label>
                                <textarea id="body" class="form-control"
                                          name="body" placeholder="Enter Post Body">{{ old('body') }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Post
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
