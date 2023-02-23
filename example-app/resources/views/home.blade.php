<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Home</title>
</head>

<body>
    <h1>Home Page</h1>
    <div class="cent">
        <!-- <a href="f1">Lobby</a> -->
        <a href="{{route('f1')}}">Lobby</a>
        <br>
        <!-- <a href="./f2">Second Floor</a> -->
        <a href="{{route('f2')}}">Second Floor</a>
        <br>
        <!-- <a href="{{url('f3')}}">Third Floor</a> -->
        <a href="{{route('f3')}}">Third Floor</a>
        <br>
        <a href="{{route('f4')}}">Four Floor</a>
        <p>Date : {{ date("Y-m-d"); }}</p>
    </div>

</body>

</html>