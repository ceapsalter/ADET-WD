function validate() {

    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;

   // var userError = document.getElementById("userError");
    // var passError = document.getElementById("passError");

    var validUser = "Ronald";
    var validPass = "Vergel";

    var x;
    var person = {
        fName : "Ronald Vergel",
        mName : "Crisostomo",
        lName : "Dela Cruz",
        age :  20
    };

    if (user === validUser && pass === validPass) {
        window.alert ("Login Successfully");

        //Show Information
        for(x in person) {
            window.alert(person[x]);
        }

    }

    else {

        window.alert ("Incorrect Username/Password! Please Try Again ..");

    }
}
