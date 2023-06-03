<?php
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == 'root' && $password == 'test') {

    header('Location: http://localhost/php_crud/dashboard.php?username=' . $username);
    exit;

} else {
    if (!empty($_GET)) {
        echo "Username and Password is wrong";
    }

}
?>
<html>
    <head>
        <body>
        <div class="container">

<form action="">
    <div class="field-group">
        <lable>Username</label>
            <input type="text" name="username" />
    </div>
    <div class="field-group">
        <lable>Password</label>
            <input type="password" name="password" />
    </div>
    <div class="field-group">

        <input type="submit" name="" value="Submit" />
    </div>
</form>

</div>
        </body>
    </head>
</html>