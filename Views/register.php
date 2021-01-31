<h3>Register</h3>
<form method="POST" action="/models/add-user.php">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter username" name="username">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Enter password again" name="password_again">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-secondary">Save</button>
        </div>
    </div>
</form>

<h3>login</h3>
<form method="POST" action="../models/login.php">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter username" name="username">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </div>
</form>