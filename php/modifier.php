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
  print ("la connection est établi")."<br>";
}
$model1='/^[a-z]{4,30}$/i'; /*lang et instructeurs taille max dans la base*/
$model2='/^[0-9]{2,20}$/'; /*chapitre taille max dans la base*/
$model3='/^[0-9]{2,50}$/'; /*prix taille max*/
$model4='/^[0-9]{2}$/';/*taille max du dure de chapitre*/

/*si l'admin veux modifier l'instructeur du cours !!!!!*/
if(!preg_match($model1,$_POST["Language"])){
  echo"<script language='javascript'>alert('Veuillez vérifier le nom du cours svp!!😬😬');</script>";
 }else{
  $Language=$_POST["Language"];
  $sq="select * from cours where Language='$Language'";
 $rez=mysqli_query($idcon,$sq);
 $donne=mysqli_fetch_array($rez);
if ($donne){
  if((isset($_POST["Instructor"])) && (preg_match($model1,$_POST["Instructor"])))
{$Instructor=$_POST["Instructor"];
  $sql="select * from cours where Instructor='$Instructor'";
    $res=mysqli_query($idcon,$sql);
    $data=mysqli_fetch_array($res);
    // si le nom de l'instructeur existe deja donc il n'a pas de modification
    if($data){
        echo"<script language='javascript'>alert('instructeur existe deja ');</script>";
        echo "<h1>Il n'ya aucune modification du nom de l'instructeur effectuer 🙆🏻‍♀️🙆🏻‍♂️, car il existe deja.";
        }
     else{
      $sql2="update cours set Instructor='$Instructor' where Language= '$Language' ";
      $res2=mysqli_query($idcon,$sql2);
      echo "<h1>modification effectuer avec succés du nom de l'instructeur🙌🙌🙌</h1>
      <h3> Vous avez changer le nom de l'instructeur en *  $Instructor   * du cours $Language 😀</h3>";
       }  
 }
else{
  echo"<script language='javascript'>alert('Veuillez entrer un valide nom de l'instructeur');</script>";
}
}else{
  echo"<script language='javascript'>alert('cours inexistant !! 😬');</script>";
  echo "<h1>ce cours n'existe pas vous ne pouvais pas modifier un cours inexistant 🙆🏻‍♂️!!</h1>";
}
 }
 /*si l'admin veux modifier le nbre de chapitre du cours*/
 if(!preg_match($model1,$_POST["Language"])){
  echo"<script language='javascript'>alert('Veuillez vérifier le nom du cours svp!!😬😬');</script>";
 }else{
  $Language1=$_POST["Language"];
  $sq1="select * from cours where Language='$Language1'";
 $rez1=mysqli_query($idcon,$sq1);
 $donne1=mysqli_fetch_array($rez1);
if ($donne1){
  if(isset($_POST["Chapters"])&& (preg_match($model2,$_POST["Chapters"])))
{$chapters=$_POST["Chapters"];
  $sql3="select * from cours where Chapters='$chapters'";
    $res3=mysqli_query($idcon,$sql3);
    $data3=mysqli_fetch_array($res3);
    if($data3){
        echo"<script language='javascript'>alert('nbre de chapitre existe deja ');</script>";
        echo "<h1>Il n'ya aucune modification effectuer du nbre de chapitre 🙆🏻‍♀️🙆🏻‍♂️, car le nombre de chapitre existe deja.";
        }
     else{
      $sql4="update cours set Chapters='$chapters' where Language= '$Language1' ";
      $res4=mysqli_query($idcon,$sql4);
      echo "<h1>modification effectuer avec succés de nbre de chapitre🙌🙌🙌</h1>";
      echo"<h3> Vous avez modifier le nbre de chapitre en $chapters du cours $Language1 😀</h3>";
       }  
 }
else{
  echo"<script language='javascript'>alert('Veuillez entrer un nbre valide de chapitre');</script>";
}
}else{
  echo"<script language='javascript'>alert('cours inexistant !! 😬');</script>";
  echo "<h1>ce cours n'existe pas vous ne pouvais pas modifier un cours inexistant 🙆🏻‍♂️!!</h1>";
}
 }
/*si l'admin veux modifier le dure du cours*/
if(!preg_match($model1,$_POST["Language"])){
  echo"<script language='javascript'>alert('Veuillez vérifier le nom du cours svp!!😬😬');</script>";
 }else{
  $Language2=$_POST["Language"];
  $sq6="select * from cours where Language='$Language2'";
 $rez6=mysqli_query($idcon,$sq6);
 $donne6=mysqli_fetch_array($rez6);
if ($donne6){
   if (isset($_POST["Duration"])&& (preg_match($model4,$_POST["Duration"])))
{$Duration=$_POST["Duration"];
  $sql5="select * from cours where Duration='$Duration'";
    $res5=mysqli_query($idcon,$sql5);
    $data5=mysqli_fetch_array($res5);
    if($data5 )
    {
        echo"<script language='javascript'>alert('le duré deja existe deja');</script>";
        echo "<h1>Il n'ya aucune modification effectuer du duré  de chapitre 🙆🏻‍♀️🙆🏻‍♂️, car le dure de chapitre existe deja.";
        }
     else{
      $sql5="update cours set Duration='$Duration' where Language= '$Language2' ";
      $res5=mysqli_query($idcon,$sql5);
      echo "<h1>modification effectuer avec succés du duré de chapitre🙌🙌🙌</h1> <h3>
       Vous avez modifier le duré du chapitre en $Duration du cours $Language2 😀</h3>";
       }
       }

 }else{
  echo"<script language='javascript'>alert('cours inexistant !! 😬');</script>";
  echo "<h1>ce cours n'existe pas vous ne pouvais pas modifier un cours inexistant 🙆🏻‍♂️!!</h1>";
}
 }
 /*si l'administrateur veux modifier le prix du <cours></cours>*/
 if(!preg_match($model1,$_POST["Language"])){
  echo"<script language='javascript'>alert('Veuillez vérifier le nom du cours svp!!😬😬');</script>";
 }else{
  $Language4=$_POST["Language"];
  $sq7="select * from cours where Language='$Language4'";
 $rez7=mysqli_query($idcon,$sq7);
 $donne8=mysqli_fetch_array($rez7);
if ($donne8){
  if(isset($_POST["Price"]) &&(preg_match($model3,$_POST["Price"])))
{$Price=$_POST["Price"];
  $sql9="select * from cours where Price='$Price'";
    $res9=mysqli_query($idcon,$sql9);
    $data9=mysqli_fetch_array($res9);
    if($data9){
        echo"<script language='javascript'>alert('Le prix du cours existe deja ');</script>";
        echo "<h1>Il n'ya aucune modification effectuer du prix de chapitre 🙆🏻‍♀️🙆🏻‍♂️, car le nombre de chapitre existe deja.";
        }
     else{
      $sql0="update cours set Price='$Price' where Language= '$Language4' ";
      $res0=mysqli_query($idcon,$sql0);
      echo "<h1>Modification effectuer avec succés du prix de cours 🙌🙌🙌</h1>";
      echo"<h3> Vous avez modifier le nbre de chapitre en $Price du cours $Language4 😀</h3>";
       }  
 }
else{
  echo"<script language='javascript'>alert('Veuillez entrer un nbre valide du prix');</script>";
}
}else{
  echo"<script language='javascript'>alert('cours inexistant !! 😬');</script>";
  echo "<h1>ce cours n'existe pas vous ne pouvais pas modifier un cours inexistant 🙆🏻‍♂️!!</h1>";
}
 }
 mysqli_close($idcon);
?>