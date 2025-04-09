<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form {
      border: solid;
      width: 40%;
      padding: 40px;
    }
    input {
      width: 100%;
      height: 40px;
    }
    span {
      color: white;
      background-color: red;
      display: block;
      padding: 5px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ url('formdata') }}" method="post">
    @csrf
    <h1>Log In</h1>

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}"><br><br>
    @error("name")
      <span>{{ $message }}</span>/home/abhi/Codes/Languages/Laravel/my-first-app/routes/web.php
    @enderror

    <label for="age">Age</label>
    <input type="text" name="age" id="age" value="{{ old('age') }}"><br><br>
    @error("age")
      <span>{{ $message }}</span>
    @enderror

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>
    @error("email")
      <span>{{ $message }}</span>
    @enderror

    <label for="city">City</label>
    <input type="text" name="city" id="city" value="{{ old('city') }}"><br><br>
    @error("city")
      <span>{{ $message }}</span>
    @enderror

    <input type="submit" value="Submit">
  </form>

</body>
</html>
