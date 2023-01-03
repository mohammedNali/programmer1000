@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi dolorum ea eaque eius eveniet fugiat, ipsa maiores minima modi molestiae nulla officia sed, similique soluta tempore temporibus voluptates voluptatibus.</p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Show Blog</a>
            </div>
        </div>
    </div>

@endsection
