<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 30%;
            border: solid;
            padding: 10px;
        }
        input{
            width: 100%;
            height: 40px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        @csrf
        <h1>Login</h1>
        <input type="text" name="name"><br><br>
        <input type="email" name="email"><br><br>
        <input type="number" name="age"><br><br>
        <input type="text" name="city"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>