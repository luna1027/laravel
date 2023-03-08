<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student.Index</title>
    <style>
        .ct {
            text-align: center;
        }

        form {
            width: fit-content;
            margin: auto;
        }
    </style>
</head>

<body>
    <h2 class="ct">Index</h2>
    <div class="ct">
        @foreach ($data as $value)
            <p>{{ $value['name'] }} {{ $value['mobile'] }}</p>
        @endforeach
    </div>
    <div class="ct">
        <div>
            <a href="{{ route('students.create') }}">create</a>
        </div>
        <div>
            <a href="{{ route('excel') }}">excel</a>
        </div>
        <div>
            <a href="{{ route('child') }}">child</a>
        </div>
    </div>
</body>

</html>
