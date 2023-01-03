<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, I am in app.blade.php file</h1>
    <?php
        $var = '5';
//        echo $var;
//        echo htmlspecialchars($var);
//        $new = htmlspecialchars("
//            <a href='test'>Test</a>
//        ");
//        echo $new;

//        if($var == 6) {
//            echo $var;
//        } else {
//            echo 'not equal';
//        }

        $array = ['first', 'second', 'third', 'fourth'];
//        $array = [];
//        foreach ($array as $item) {
//            echo $item .' ';
//        }


    ?>
    <br>
{{--    {!! $var !!}--}}
{{--    <br>--}}
{{--    {{ $var }}--}}
{{--    @if($var == 6)--}}
{{--        {{ $var }}--}}
{{--    @else--}}
{{--        {{ 'not equal' }}--}}
{{--    @endif--}}
       <ul>
           @foreach($array as $item)
                <li>{{ $item }}</li>
           @endforeach
       </ul>
        <ol>
            @forelse($array as $str)
                <li>{{ $str }}</li>
            @empty
                {{ 'empty' }}
            @endforelse
        </ol>
        @php
            $order = 'second';
        @endphp
{{--        @switch($order)--}}
{{--            @case('first')--}}
{{--                {{ 'the case is first' }}--}}
{{--                @break--}}
{{--            @case('second')--}}
{{--                {{ 'the case is second' }}--}}
{{--                @break--}}
{{--            @default--}}
{{--                {{ 'the case is default' }}--}}
{{--        @endswitch--}}
        @php $j = 3; @endphp
        @while($j < 5)
            {{ $j . 'is less than 5' }}
        @endwhile
</body>
</html>
