<?php
  setcookie('username',"farahwissem",time()+60*60);
  setcookie('rememberMe',"remember",time()+60*60);
session_start();
echo "Bonjour 👧🏻👦🏻".$_SESSION['username'];
echo " si  vous voulez vous déconnecter cliquer <a href='php/logout.php'>log out</a>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Ajouter et Modifier une langue</title>
      <link rel="stylesheet" href="styles/form_admin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="Line">   
      <div class="wrapper">
         <div class="title-text">
            <div class="title Modify">
               Modify Lang
            </div>
            <div class="title Add">
               Add Lang
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="Modify" checked>
               <input type="radio" name="slide" id="Add">
               <label for="Modify" class="slide Modify">Modify</label>
               <label for="Add" class="slide Add">Add</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="Modify">
                   <div class="field">
                     <input type="text" placeholder="Language" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Instructor" required>
                  </div>
                  <div class="field">
                     <input type="number" placeholder="chapters" required>
                  </div>
                    <div class="field">
                     <input type="number" placeholder="Duration" required>
                  </div>
                   <div class="field">
                     <input type="number" placeholder="Price" required>
                  </div>
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Save">
                  </div>
                  
               </form>
               <form  class="Add" action="php/ajouter.php" method="post">
                    <div class="field">
                     <input type="text" placeholder="Language" required name="Language">
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Instructor" required name="Instructor">
                  </div>
                  <div class="field">
                     <input type="number" placeholder="Chapters" required name="Chapters">
                  </div>
                   <div class="field">
                     <input type="number" placeholder="Duration" required name="Duration">
                  </div>
                  <div class="field">
                     <input type="number" placeholder="Price" required name="Price">
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Add">
                  </div>
               </form>
                
                
                
                
                
            </div>
         </div>
      </div>
       
       
       
       <div class="delimiteur"></div>
       
       
       <div class="wrapper" style="max-height:250px;margin-top:170px">
         <div class="title-text">
            <div class="title Modify">
               Delete Lang
            </div>
           
         </div>
         <div class="form-container">
           
            <div class="form-inner">
               <form action="php/supprimer.php" method="post" class="Modify">
                   <div class="field">
                     <input type="text" placeholder="Language" required name="Language">
         </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Delete">
                  </div>
               </form>
               <form action="#" class="Add">
                    <div class="field">
                     <input type="text" placeholder="Language" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Instructor" required>
                  </div>
                  <div class="field">
                     <input type="number" placeholder="Chapters" required>
                  </div>
                   <div class="field">
                     <input type="number" placeholder="Duration" required>
                  </div>
                  <div class="field">
                     <input type="number" placeholder="Price" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Add">
                  </div>
               </form>
            </div>
         </div>
      </div>
        </div>
      <script>
         const ModifyText = document.querySelector(".title-text .Modify");
         const ModifyForm = document.querySelector("form.Modify");
         const ModifyBtn = document.querySelector("label.Modify");
         const AddBtn = document.querySelector("label.Add");
         const AddLink = document.querySelector("form .Add-link a");
         AddBtn.onclick = (()=>{
           ModifyForm.style.marginLeft = "-50%";
           ModifyText.style.marginLeft = "-50%";
         });
         ModifyBtn.onclick = (()=>{
           ModifyForm.style.marginLeft = "0%";
           ModifyText.style.marginLeft = "0%";
         });
            AddLink.onclick = (()=>{
           AddBtn.click();
           return false;
         });
      </script>
   </body>
</html>