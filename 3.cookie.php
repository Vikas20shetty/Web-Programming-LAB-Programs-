<!DOCTYPE html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")

$cookie_name =$_POST['name'];
$cookie_value = $_POST['phone'];


setcookie($cookie_name, $cookie_value, time() + 1800, "/"); 

if(!isset($_COOKIE[$cookie_name]))
{
    echo"Cookie named " .$cookie_name. " is not set";
}

else
{
    echo"Cookie  " .$cookie_name." is set<br>";
    echo"Value is ".$_COOKIE[$cookie_name];
}
?>
