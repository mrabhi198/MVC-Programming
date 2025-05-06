<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <title>Form</title>
    <h1>Form</h1>

    <!-- @if($errors->any())
        @foreach($errors->all() as $error)
            <h5 class="err">{{$error}}</h5>
        @endforeach
    @endif -->

    <div>
        <form action="adduser" method="post">
            @csrf
            <div>
                <input class="input" type="text" name="name" placeholder="Enter Your name" value="{{ old('name') }}">
                <span class='err'>
                    @error('name')
                        {{$message}}
                    @enderror
                </span><br><br>
                <input class="input" type="text" name="email" placeholder="Enter Your email">
                <span class='err'>
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
                <br><br>
                <input class="input" type="text" name="city" placeholder="Enter Your city"><br><br>
                <div>
                    <h2>Skills</h2>
                    <input type="checkbox" name="skill[]" id="php" value="PHP">
                    <label for="php">PHP</label>

                    <input type="checkbox" name="skill[]" id="node" value="Node">
                    <label for="node">Node</label>

                    <input type="checkbox" name="skill[]" id="express" value="ExpressJS">
                    <label for="express">ExpressJS</label>

                    <input type="checkbox" name="skill[]" id="laravel" value="Laravel">
                    <label for="laravel">Laravel</label>
                </div><br>
                <div>
                    <h2>Gender</h2>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>

                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                </div>
                <button class="btn">Add User</button>
            </div>
        </form>
    </div>
</div>

<style>
    .input {
        border-color: #ffa5008a;
    /* background-color: #ffa5005c; */
    padding: 10px;
    margin: 12px;
    }

    .btn {
        border-color: #ffa5008a;
    background-color: #fff;
    padding: 10px;
    margin: 12px;
    }

    .err{
        color: rgba(255, 0, 0, 0.54);
    }
</style>