<?php
$username = "now";
$password = "123";
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    if($_SERVER['PHP_AUTH_USER'] === $username  &&
       $_SERVER['PHP_AUTH_PW'] === $password)
        echo "You are";
        else
        die("sadhsjdhsa");

    echo "Welcome User: " . htmlspecialchars($_SERVER['PHP_AUTH_USER'])."<br>";
    echo "PassWord: " . htmlspecialchars($_SERVER['PHP_AUTH_PW'])."<br>";
}else{
    header('WWW-Authenticate: Basic realm = "Restricted Area"');
    header('HTTP/1.0 4.01 Unauthorized');
    die("Please anter your username and password");
}