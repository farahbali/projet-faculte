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
// verification de l'identifiant !!!!!!!!!!
// $username=$_POST["identifiant"];
// $sql="select * from admin where username='$username'";
// $res=mysqli_query($idcon,$sql);
// $data=mysqli_fetch_array($res);
// if (!$data){
//   //  echo "l'identifiant de l'administrateur est incorrecte ! ❌😧😱";
//    echo "<script language='javascript'> alert('❌😧😱votre identifiant est incorrecte 😬😕❌')</script>";
// }
// else{
//     echo "seulement l'identifiant est correcte 😁";
// }
// verification du mot de passe !!!!!!!!!
// $pswrd=$_POST["mdp"];
// $sql1="select * from admin where pswrd='$pswrd'";
// $res2=mysqli_query($idcon,$sql1);
// $data2=mysqli_fetch_array($res2);
// if (!$data2){
//   //  echo "le mot de passe de l'administrateur est incorrecte ! ❌😧😱";
//    echo "<script language='javascript'> alert('❌😧😱votre mot de passe est incorrecte 😬😕❌')</script>";
// }
// else{
//     echo "Seulement le mot de passe est correcte  😁";
// }
$username=$_POST["identifiant"];
$pswrd=$_POST["mdp"];
$sql="select * from admin where username='$username'";
$res=mysqli_query($idcon,$sql);
$data=mysqli_fetch_array($res);
$sql1="select * from admin where pswrd='$pswrd'";
$res2=mysqli_query($idcon,$sql1);
$data2=mysqli_fetch_array($res2);
if ((!$data)&&(!$data2)){
  //  echo "l'identifiant de l'administrateur est incorrecte ! ❌😧😱";
   echo "<script language=\"javascript\"> window.alert('❌😧😱votre identifiant ou mot de passe est incorrecte 😬😕❌')
   window.history();</script>";
   echo "votre identifiant or mot de passe est invalide 😧😬.<br> click here to <a href='admin.html'>try again 🙃🙃</a>";
}
// else if(isset($_POST['username'])&&isset($_POST['mdp'])&&($data)&&($data2)){
//     if(isset($_POST['remember'])){
//         $remember=$_POST['remember'];
//       setcookie('username',$username,time()+3600);
//       setcookie('rememberMe',$remember,time()+3600);
//     }
//     session_start();
//     $_SESSION['username']=$username;
//     header("location: php/form_admin.php");
//     echo "wow";
// }
else{
   session_start();
    $_SESSION['username']=$username;
    echo "<script language=\"javascript\"> window.alert('cliquer sur le lien  maintement pour aller dans votre espace administrateur');
    </script>";
    // header('location : formAadmin.php');
    // echo "<a href='formAdmin.php'>ESPACE ADMINISTRATEUR</a>";
// header('location : formAadmin.php');
}

?>