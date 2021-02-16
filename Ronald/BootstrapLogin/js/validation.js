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

function validateSignup(){
    var Firstname =  document.getElementById('inputFirstName').value;
    var Lastname =  document.getElementById('inputLastName').value;
    var Email =  document.getElementById('inputEmail').value;
    var Username = document.getElementById('inputUser').value;
    var Address = document.getElementById('inputAddress').value;
    var Password = document.getElementById('inputPassword').value;
    var Password2 = document.getElementById('confirmPass').value;

    //FirstName
    console.log(Firstname);
    var firstNameRegEx = /[A-Z] {2}/;
    console.log(FirstnameRegEx.test(Firstname));

    //LastName
    console.log(Lastname);
    var lastNameRegEx = /[A-Z]{2}/;
    console.log(lastNameRegEx.test(Lastname));

    //Email
    console.log(Email);

    //Username
    console.log(Username);
    var usernameRegEx = /([a-z])[0-9]{2}/;
    console.log("Username Result : " + usernameRegEx.test(Username));

    //Address
    console.log(Address);
    var usernameRegEx = /([a-z])[0-9]{2}/;
    console.log(usernameRegEx.test(Username));

    //Username
    console.log(Username);
    var usernameRegEx = /([a-z])[0-9]{2}/;
    console.log(usernameRegEx.test(Username));
}
