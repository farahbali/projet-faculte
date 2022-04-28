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
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Project.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet"> 
    <title>Cours</title>
    <style>
        h1{
            text-align: center;
            color: darkred;
            font-size: 40px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        table{
            text-align: center;
            margin-left:24%;
            width: 800px;
            border-color: darkred;
            border-width: 10px;
        }
        table>th{
            color: darkgrey;
            font-weight:bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
<a href="#" class="nolink"><h1 id="title1">I Can<span class="S">S</span>peak It</h1></a></div>
<h1>Les cours </h1>
<?php
echo "<table border='1'>";
echo "<tr> <th> Language</th> <th>Chapters</th><th>Instructor</th> <th>Duration</th><th>Price</th></tr>";
$sql="select * from cours";
$res=mysqli_query($idcon,$sql);


while($data=mysqli_fetch_array($res)){
    echo "<tr><td>";
    echo $data['Language'];
    echo "</td>";
    echo "<td>";
    echo  $data['Chapters'];
    echo "</td>";
    echo "<td>";
    echo  $data['Instructor'];
    echo "</td>";
    echo "<td>";
    echo  $data['Duration'];
    echo "</td>";
    echo "<td>";
    echo  $data['Price'];
    echo "</td></tr>";    
}
echo "</table>";
mysqli_free_result($res);
mysqli_close($idcon);
?>
</body>
</html>