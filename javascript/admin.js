/*validation de l'identifiant de l'administrateur*/
function verify_username(){
    username=document.getElementById('identifiant').value;
    id_valide=document.getElementById('identifiant_valide');
    if(username=="farahWissem"){
    id_valide.innerHTML="Valide 🙌🙌"
    }
    else{
        id_valide.innerHTML=""
    }
    return false;
}
/*validation du mot de passe  de l'administrateur*/
function verify_mdp(){
    pswrd=document.getElementById('mdp').value;
    mdp_valide=document.getElementById('mdp_valide');
    if(pswrd=="2001"){
    mdp_valide.innerHTML="Valide 🙌🙌"
    }
    else{
        mdp_valide.innerHTML=""
    }
    return false;
}

