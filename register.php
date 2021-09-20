<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
<div>
        <form  method="POST">
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>    
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <input type="submit"  value="Submit">
            </div>
        </form>
    </div>    
</body>
</html>
<?php error_reporting(E_ALL ^ E_NOTICE);?>
<?php
require "config.php";
 $username = $_POST['username'];
  $password = $_POST['password'];
$sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
mysqli_query($link,$sql);
?>