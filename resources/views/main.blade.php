<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>What is this?</title>
</head>
<body>
    <div class=" ">

        @include('top_bar')
        @yield('content')
        @if (\Request::is('/'))
            <div class="grid grid-cols-1 gap-2 w-full">
                <div class="p-3 m-auto bg-blue-400 h-12 w-30">
                    <a href="{{route('user')}}" >User</a> &nbsp;
                </div>
                <div class="p-3 m-auto bg-blue-400 h-12 w-30">
                    <a href="{{route('product')}}" >Product</a> &nbsp;

                </div>
                <div class="p-3 m-auto bg-blue-400 h-12 w-30">
                    <a href="{{route('manufacturer')}}" >Manufacturer</a>

                </div>
            </div>
        @endif
    </div>
</body>
</html>
