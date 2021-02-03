function dialogBox(){
    var message = confirm("Do you want to Continue ?");

    if( message == true){
        window.alert("Ron wants to continue");
        return true;
       } else {
        window.alert("Ron does not want to continue");
           resturn false;
       }
}
