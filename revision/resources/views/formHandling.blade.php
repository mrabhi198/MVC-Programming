<div>
    <h1>Form Handling</h1>

    <!-- <form action="addusers" method="get">
    </form> -->
    <form action="addusers" method="post">
    @csrf
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
        </div>

        <div>
            <h2>Gender</h2>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h2>City</h2>
            <select name="city" id="city">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="NCR">NCR</option>
            </select>
        </div>

        <div>
            <h2>Age</h2>
            <input type="range" name="age" min="18" max="100">
        </div>

        <div>
            <button type="submit">Add User</button>
        </div>

    </form>
</div>
