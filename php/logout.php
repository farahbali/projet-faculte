<?php
session_start();
session_destroy();
if(isset($_COOKIE['username']) and isset($_COOKIE['rememberMe'])) {
    $username=$_COOKIE['username'];
    $remember=$_COOKIE['rememberMe'];
     setcookie('username', $username, time()-1);
     setcookie('rememberMe',$remember, time()-1);
 }          
echo "<h1>you have logged out 😴</h1> .click here to log in <a href='admin.html'>log in</a>";
?>