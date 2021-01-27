//Variables
var x;
var person = {
    fName : "Ronald Vergel",
    mName : "Crisostomo",
    lName : "Dela Cruz",
    age :  20
};



/*function validate(){

    var username = document.getElementById("user").value;
    var password = document.getElementById("pass").value;

    if ( username == "Ronald" && password == "Ronald123"){
        window.alert ("Login Successfully");

        //Show Information
        for(x in person){
            window.alert(person[x]);
        }

        return false;

    }

    else{
        window.alert ("Incorrect Username/Password! Please Try Again ..");

    }
}*/

var username = document.forms['form']['username'];
var password = document.forms['form']['password'];

var userError = document.getElementById('userError');
var passError = document.getElementById('passError');

var user = document.getElementById("username").value;
var pass = document.getElementById("password").value;

username.addEventListener('textInput', usernameVerify);
password.addEventListener('textInput', passwordVerify);

function validate(){

    if ( user == "Ronald" && pass == "Ronald123"){
        window.alert ("Login Successfully");

        //Show Information
        for(x in person){
            window.alert(person[x]);
        }

        return false;

    }

    else{
        if(username.value.length < 6){
        username.style.border = "1px solid red";
        userError.style.display = "block";
        username.focus();
        return false;
        }
        if(password.value.length < 6){
            password.style.border = "1px solid red";
            passError.style.display = "block";
            password.focus();
            return false;
        }
        window.alert ("Incorrect Username/Password! Please Try Again ..");

    }
}

function usernameVerify(){
    if(username.value.length >= 6){
        username.style.border = "1px solid silver";
        userError.style.display = "none";
        return true;
    }
}

function passwordVerify(){
    if(password.value.length >= 6){
        password.style.border = "1px solid silver";
        passError.style.display = "none";
        return true;
    }
}
