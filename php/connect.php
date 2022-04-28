<?php
$host="localhost";
 $user="root";
 $pass="";
 $dbname="projetweb";
 $idcon = mysqli_connect($host,$user,$pass,$dbname);
 if(!$idcon){
   die("echec de la connection"." ".mysqli_connect_error());
 }
 else{
   print ("la connection est établit")."<br>";
 }?>