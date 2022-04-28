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
  print ("<h2>la connection avec la base de donnée est bien établit 😀🥳</h2>")."<br>";
}
$model1='/^[a-z]{4,30}$/i'; /*lang et instructeurs taille max dans la base*/
$model2='/^[0-9]{20}$/'; /*chapitre taille max dans la base*/
$model3='/^[0-9]{50}$/'; /*prix taille max dans la base*/

// la prise des valeurs misent dans la formulaire et l'insertion
if (isset($_POST["Language"])&& isset($_POST["Instructor"])&& isset($_POST["Chapters"])&&isset($_POST["Duration"])&& isset($_POST["Price"]))
 {
   $Language=$_POST["Language"];
   $Instructor=$_POST["Instructor"];
   $Chapters=$_POST["Chapters"];
   $Duration=$_POST["Duration"];
   $Price=$_POST["Price"];}
      if((!preg_match($model1,$Language)and (!preg_match($model1,$Instructor))and(!preg_match($model2,$Chapters))and (!preg_match($model3,$Price))and (!preg_match($model3,$Duration))))
      {
        echo"<script language='javascript'>alert('Veuillez vérifier vos données svp!!😬😬');</script>";
        }
        else{
          $sql="select * from cours where Language= '$Language'";
          $res=mysqli_query($idcon,$sql);
          $data=mysqli_fetch_array($res);
          if($data){
            echo"<script language='javascript'>alert('ce cours existe deja 🙃');</script>";
          }
         else{
           $sql1="insert into cours values ('$Language','$Chapters','$Instructor','$Duration','$Price')";
            $res1=mysqli_query($idcon,$sql1);
                if($res1){
               echo "<h1> le cours $Language est ajouté avec succés 😀🤗</h1>";
                        }
              else{
                echo "la cours n'est pas enregistrer suite a une erreur 😣".mysqli_error($idcon);
               }
         }
        }
        mysqli_close($idcon);
?>