<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
</head>
<body>
    <form action="imagedata" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="submit" name="btn">
    </form>
</body>
</html>