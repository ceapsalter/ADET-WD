function validate() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;

    var validUser = "Ronald";
    var validPass = "Vergel";


    if (user === validUser && pass === validPass) {
        window.alert ("Login Successfully");

        window.location.replace("Activity7.html");
        return false;
    }

    else {
        window.alert ("Incorrect Username/Password! Please Try Again ..");
    }
}

function logout(){
    document.getElementById("logout-form").submit();
}
