<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>index</title>
</head>

<body>
    <!-- <h2 class="ct">CAR</h2> -->
    <div class="flex">
        <h2>Cars Index</h2>
        <div class="idx-img"><img src="img/idx.jpg" alt="" style="object-fit: cover;height:90vh;"></div>
        <div class="idx-content">
            <p><a href="{{route('cars.create')}}">EVERYTHING</a> </p>
            <p><a href="{{route('cars.index')}}">WILL</a> </p>
            <p><a href="{{route('cars.create')}}">BE</a> </p>
            <p><a href="{{route('cars.index')}}">ALRIGHT</a> </p>
        </div>s
    </div>
</body>

</html>