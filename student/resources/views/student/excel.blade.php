<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student.Excel</title>
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
    <h2 class="ct">Excel</h2>
    <div class="ct">
        <div>
            <a href="{{route('students.create')}}">create</a>
        </div>
        <div>
            <a href="{{route('students.index')}}">Home</a>
        </div>
    </div>
</body>

</html>