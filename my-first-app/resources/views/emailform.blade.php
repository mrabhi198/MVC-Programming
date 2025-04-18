<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sendemail" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name"><br><br>

        <label for="name">City</label>
        <input type="text" name="city"><br><br>

        <label for="name">Course</label>
        <input type="text" name="course"><br><br>

        <label for="name">Fees</label>
        <input type="text" name="fee"><br><br>

        <label for="name">Gender</label>
        <input type="text" name="gender"><br><br>

        <label for="name">Address</label>
        <input type="text" name="add"><br><br>

        <input type="submit" name="btn">
    </form>
</body>
</html>