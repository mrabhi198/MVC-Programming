<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Form</title>
</head>
<body>
    <form action="dataform" method="post">
        @csrf
        <input type="text" name="name">
        <input type="subkit" name="btn">
    </form>
</body>
</html>