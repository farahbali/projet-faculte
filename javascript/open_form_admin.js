function open(){
    username=document.getElementById('identifiant').value;
    pswrd=document.getElementById('mdp').value;
    if((username=="farahWissem")&&(pswrd=="2001")){
        window.open('form_admin.php', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=10000000,left=500,width=1000,height=1000');
    }
}