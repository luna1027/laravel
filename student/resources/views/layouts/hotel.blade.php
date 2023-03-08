<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>泰山大飯店-@yield('title')</title>
    <style>
        body {
            text-align: center
        }
    </style>
</head>

<body>
    <h1>泰山大飯店</h1>
    <div class="container">
        @section('construction')
            Welcome
        @show
    </div>
    <div class="elevator">
        @section('elevator')
            <a href="{{ route('hotels.index') }}">Home</a>
        @show
    </div>
</body>

</html>
