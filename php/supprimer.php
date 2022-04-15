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
  print ("<h2>la connection avec la base de donnée est établit 😀😀</h2>")."<br>";
}
$model1='/^[a-z]{4,30}$/i';
if(isset($_POST["Language"])){
$Language=$_POST["Language"];
}
if (!preg_match($model1,$Language)){
  echo "<script language=\"javascript\"> window.alert('❌Saisir un cours valide svp !❌')</script>";
}
else{
$sql="select * from cours where Language='$Language'";
$res=mysqli_query($idcon,$sql);
$data=mysqli_fetch_array($res);
}
if($data){
    $sql2="delete from cours where Language='$Language'";
    $res2=mysqli_query($idcon,$sql2);
}
else{
  echo "<script language=\"javascript\"> window.alert('❌😧😱le cours que vous venez de supprimer n' existe pas !!😬😕❌')</script>";
}
if($res2){
  echo "<h1>la suppréssion du cours a été bien effectuer 🙌🙌</h1>";
}
mysqli_close($idcon);
?>
