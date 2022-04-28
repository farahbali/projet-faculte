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
}
$username=$_POST["identifiant"];
$pswrd=$_POST["mdp"];
$sql="select * from admin where username='$username'";
$res=mysqli_query($idcon,$sql);
$data=mysqli_fetch_array($res);
$sql1="select * from admin where pswrd='$pswrd'";
$res2=mysqli_query($idcon,$sql1);
$data2=mysqli_fetch_array($res2);
if (!($data)&&!($data2)){
   echo "<script language=\"javascript\"> window.alert('❌😧😱votre identifiant ou mot de passe est incorrecte 😬😕❌')
   window.history();</script>";
   echo "<h1>votre identifiant or mot de passe est invalide</h1> 😧😬.<br> click here to <a href='admin.html'>try again 🙃🙃</a>";
}
else{
   session_start();
    $_SESSION['username']=$username;
    echo "<script language=\"javascript\"> window.alert('cliquer sur le lien  maintement pour aller dans votre espace administrateur');
    </script>";
    // header('location : formAdmin.php');
    echo "<a href='formAdmin.php'>ESPACE ADMINISTRATEUR</a>";
// header('location : formAadmin.php');
}
mysqli_close($idcon);
?>