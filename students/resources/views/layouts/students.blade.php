<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students - @yield('title')</title>
    <style>
        * {
            text-align: center;
            margin: auto;
        }

        table {
            background: #ccc;
            background: #555;
        }

        th {
            background: #555;
            width: 120px;
            font-size: 1.2rem;
            color: aliceblue
        }

        td {
            height: 2rem;
            margin: 4px;
            background: #fff;
        }
    </style>
</head>

<body>
    <h1>@yield('header')</h1>
    @section('container')

    @show
    <br>
    <div>
        @section('a')
            <a href="{{ route('students.index') }}">Home</a>
        @show
    </div>
</body>

</html>
