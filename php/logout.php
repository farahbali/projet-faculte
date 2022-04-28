<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>you have logged out 😴</h1> 
click here to log in <a href="formAdmin.php">log in</a>;
<?php
session_start();
session_destroy();
if(isset($_COOKIE['username']) and isset($_COOKIE['rememberMe'])) {
    $username=$_COOKIE['username'];
    $remember=$_COOKIE['rememberMe'];
     setcookie('username', $username, time()-1);
     setcookie('rememberMe',$remember, time()-1);
 }  
  ?>        

</body>
</html>
