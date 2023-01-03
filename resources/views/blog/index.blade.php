@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1>Our Blog!</h1>
                        <p>Enjoy reading our posts.</p>
                    </div>
                    <div class="col-4">
                        <p>Creat new Post</p>
                        <a href="/create" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ $post->title }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog posts available</p>
                @endforelse

{{--                @foreach($posts as $post)--}}
{{--                    @dd($loop)--}}
{{--                    <article class="{{ $loop->even ? 'bg-warning' : '' }}">--}}
{{--                        <h1>--}}
{{--                            <a href="/blog/{{ $post->id }}">--}}
{{--                                {{ $post->title }}--}}
{{--                            </a>--}}
{{--                        </h1>--}}
{{--                        <img src="{{ $post->img_file }}" alt="" width="300">--}}
{{--                        <p>--}}
{{--                            {{ $post->body }}--}}
{{--                        </p>--}}
{{--                    </article>--}}
{{--                @endforeach--}}
            </div>
        </div>

    </div>

@endsection
