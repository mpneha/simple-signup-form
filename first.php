<?php
require "config.php";
// $sql = "SELECT * FROM users WHERE id=3";
// $query = mysqli_query($link,$sql);
// $array = mysqli_fetch_array($query);
$id = 1;

while($id <= 3){
    $sql = "SELECT * FROM users WHERE id=$id";
$query = mysqli_query($link,$sql);
$array = mysqli_fetch_array($query);
    $id++;
    $username = $array['username'];
    $password = $array['password'];
echo"$username \n";
echo"$password";
}
?>