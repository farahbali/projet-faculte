
        //   <verification du 1er input>
function verifyPrenom(){
    prenom=document.getElementById("PRENOM").value;
    prenom2=document.getElementById("prenom")
    for (i=0;i<prenom.length;i++){
        x=prenom.charAt(i).toLowerCase();
        if (x<'a' || x>'z'){
            prenom2.innerHTML="veuillez saisir votre prenom correctement";
            return false;
        } 
else{
    prenom2.innerHTML="";
}
}}
            //  <verification de 2eme input>
function verifyNom(){
    nom=document.getElementById("NOM").value;
    nom2=document.getElementById("nom");
    for (i=0;i<nom.length;i++){
        x=nom.charAt(i).toLowerCase();
        if (x<'a' || x>'z'){
            nom2.innerHTML="veuillez saisir votre prenom correctement";
            return false;
        } 
else{
    nom2.innerHTML="";
}
}
}
        //   <verification de 3eme input>
function verifyNumero(){
  num=document.getElementById("numero").value;
  erreurNum=document.getElementById("erreurNum");
  num1=new RegExp(/^[*\d]+$/,'g')
  if((num1.test(num)==false) || (num.length!=8)){
      erreurNum.innerHTML="veuillez saisir votre numéro de téléphone correctement.";
      return false;
  }
  else{
      erreurNum.innerHTML="";
  }
}
    //  <verification de 4eme input>
function verifyEmail(){
   email=document.getElementById("mail").value;
   erreurMail=document.getElementById("erreurMail");
   if ((email.indexOf('@')==-1)|| (email.indexOf('.')==-1)){
    erreurMail.innerHTML="votre e-mail est invalide."
    return false;
}
else{
    erreurMail.innerHTML="";
}
}
    // <verification de select et les deux  check>
    function verify(){
        liste1=document.getElementsByTagName("option");
        liste2=document.getElementsByName("cours[]");
        liste3=document.getElementsByName('payer');
        erreurSelect=document.getElementById("erreurSelect");
        erreurPayer=document.getElementById("erreurPayer");
        erreurCheck=document.getElementById("erreurCheck");
         if ((!liste1[1].selected)&&(!liste1[2].selected))
        {
            erreurSelect.innerHTML="veuillez selectionner votre choix du deroulement de cours"
            return false;
        }
        else if((!liste2[0].checked)&&(!liste2[1].checked)&&(!liste2[2].checked)
        &&(!liste2[3].checked))
        {
            erreurCheck.innerHTML="veuillez selectionner votre choix du cours";
            return false;
        }
        else if ((!liste3[0].checked)&&(!liste3[1].checked)&&(!liste3[2].checked))
        {
          erreurPayer.innerHTML="veuillez selectioner une parmis ses methode de payement"
            return false;
        }
        else{
            erreurPayer.innerHTML="";
            erreurCheck.innerHTML="";
            erreurSelect.innerHTML="";
            alert("votre formulaire est bien reçu , merci pour votre choix")
        }
        }
      
            //   <btn reset>
document.getElementById('formulaire').addEventListener('reset', function(e){
e.preventDefault();
ok=window.confirm("Etes-vous sure de vouloir continuer ? ")
if(ok){
       window.alert("au revoir !")
 }
   else{
       window.alert("veuiller remplir la formulaire")
   }
})