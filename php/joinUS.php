<!-- connection a la base de donée !!!!!!!!!!!!!!-->
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
  print ("<h2>la connection est établit 😀😀</h2>")."<br>";
}
//  affectation des variable!!!!!!!!!!!!!!!
 if (isset($_POST["nom"])&& isset($_POST["prenom"])&& isset($_POST["numTell"])&&isset($_POST["date"])&& isset($_POST["email"])&& isset ($_POST["liste"])&&isset($_POST["cours"])&&isset($_POST["payer"]))
 {
   $nom=$_POST["nom"];
   $prenom=$_POST["prenom"];
   $numTell=$_POST["numTell"];
   $dn=$_POST["date"];
   $email=$_POST["email"];
   $methode=$_POST["liste"];
   $cours=$_POST["cours"];
   $payement=$_POST["payer"];
 }
 else{
   echo "les tout les champ doit étre remplit svp ! ☺️☺️";
 }
 /*convertir le tableau cours en un string*/
 $courses=implode(',',$cours);
//  validation des inputs !!!!!!!!!!!!!!!!!!!
// les modeles!!!!!!!
$model1='/^[a-z]{3,30}$/i';
$model2='/^[0-9]{8}$/';
// // insertion plus validation!!!!!!!!!!!!!
    if (preg_match($model1,$nom)&&preg_match($model1,$prenom)&&preg_match($model2,$numTell)){
        $sql="insert into etudiant values ('$nom','$prenom','$numTell','$email','$dn','$methode','$courses','$payement')";
        $res=mysqli_query($idcon,$sql);
        if ($res){
            echo "<h1>tout vos coordonnée on été enregistrer avec succés 🤗👍</h1>";
          }
          else{
            echo "<h1>l'étudiant n'été pas enregistrer</h1> 😣".mysqli_error($idcon);
          }
    }
    // fermeture de la connection!!!!!!!!!
    mysqli_close($idcon);
?>