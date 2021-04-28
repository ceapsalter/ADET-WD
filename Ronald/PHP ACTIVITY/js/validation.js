function validate() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;

    var validUser = "Ronald";
    var validPass = "Vergel";


    if (user === validUser && pass === validPass) {
        window.alert("Login Successfully");

        window.location.replace("Activity7.php");
        return false;
    } else {
        window.alert("Incorrect Username/Password! Please Try Again ..");
    }
}

function validateSignup() {
    var Firstname = document.getElementById('inputFirstName').value;
    var Lastname = document.getElementById('inputLastName').value;
    var Username = document.getElementById('inputUser').value;
    var Address = document.getElementById('inputAddress').value;
    var Password = document.getElementById('inputPassword').value;
    var Password2 = document.getElementById('confirmPass').value;
    var firstNameRegEx, lastNameRegEx = /^[A-Z][a-z]+(?:[-'\s][A-Z][a-z]+)*$/;
    var usernameRegEx = /^(?=(?:\d*[A-Za-z]){6})(?=(?:[A-Za-z]*\d){2})[A-Za-z0-9]{6,8}$/;
    var addressRegEx = /([A-Z0-9]+[\s-]*[A-Z0-9]*)([A-Za-z,.\s]*)/;
    var passwordRegEx = /^(?=(?:[!@#$%^&+=]*[A-Za-z0-9]){7,10})(?=(?:[A-Za-z0-9]*[!@#$%^&+=]){1}).{8,11}$/;


    if (firstNameRegEx.test(Firstname)) {
        if (lastNameRegEx.test(Lastname)) {
            if (usernameRegEx.test(Username)) {
                if (addressRegEx.test(Address)) {
                    if (passwordRegEx.test(Password)) {
                        if (Password2 != Password) {
                            window.alert("Password do not match!");
                        }
                        else{
                            window.alert("Registered Successfully");
                            Firstname.focus();
                        }
                    }
                }
            }
        }

    } else {
        window.alert("Incorrect Inputs! Please Try Again ..");
    }
}
