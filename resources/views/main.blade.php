<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>What is this?</title>
</head>
<body>
    <div class="text-center ">

        @include('top_bar')
        @yield('content')
    </div>
</body>
</html>
