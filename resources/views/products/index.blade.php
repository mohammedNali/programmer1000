{{--<x-layout content="hello, I am inside the index file">--}}
{{--    --}}
{{--</x-layout>--}}

<x-layout>
{{--    <x-slot name="content">--}}
        <div class="container">
            @foreach($products as $product)
                {{--            @dd($loop)--}}
{{--                <article class="{{ $loop->even ? 'bg-warning' : '' }}">--}}
                <article>
                    <h1>
                        <a href="/blog/{{ $product->id }}">
                            {{ $product->title }}
                        </a>
                    </h1>
                    {{--                <img src="{{ $product->img_file }}" alt="" width="300">--}}
                    <p>
                        {{ $product->description }}
                    </p>
                </article>
            @endforeach
            <x-button>
                Send <span>Request</span>
            </x-button>
        </div>
{{--    </x-slot>--}}

</x-layout>
