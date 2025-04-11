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

        <label for="name">Email</label>
        <input type="email" name="to"><br><br>

        <label for="name">Subject</label>
        <input type="text" name="sub"><br><br>

        <label for="name">Message</label>
        <input type="text" name="msg"><br><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>