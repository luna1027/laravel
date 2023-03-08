<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student.Create</title>
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
    <h2 class="ct">Create</h2>
    <form action="" method="post">
        <div>
            <div>Name</div>
            <div><input type="text" name="name"></div>
        </div>
        <div>
            <div>Account</div>
            <div><input type="text" name="acc"></div>
        </div>
        <div>
            <div>Password</div>
            <div><input type="password" name="pw"></div>
        </div>
        <div>
            <div>Mail</div>
            <div><input type="text" name="mail"></div>
        </div>
        <div class="ct">
            <input type="submit" value="Submit"><input type="reset" value="Reset">
        </div>
        <hr>
    </form>
    <div class="ct">
        <a href="{{route('students.index')}}">Home</a>
    </div>
</body>

</html>