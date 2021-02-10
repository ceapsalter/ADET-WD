function validate() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;

    var validUser = "Ronald";
    var validPass = "Vergel";


    if (user === validUser && pass === validPass) {
        window.alert ("Login Successfully");

        window.location.replace("CVPage.html");
        return false;
    }

    else {
        window.alert ("Incorrect Username/Password! Please Try Again ..");
    }
}
