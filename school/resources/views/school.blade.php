<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <style>
        * {
            list-style: none;
            text-decoration: none;
        }

        body {
            width: fit-content;
            text-align: center;
            margin: auto;
        }

        a:hover {
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <h2>Hi {{$name}} ! Welcome to School</h2>
    <div>
        <div><a href="{{route('p1')}}">PHP</a></div>
        <div><a href="{{route('p2')}}">HTML</a></div>
        <div><a href="{{route('p3')}}">CSS</a></div>
        <div><a href="{{route('p4')}}">Java Script</a></div>
        <div><a href="{{route('p5')}}">Jquery</a></div>
        <div><a href="{{route('p6')}}">Laravel</a></div>
    </div>
</body>

</html>