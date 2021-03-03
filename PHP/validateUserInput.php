<?php
    echo "testest";
    if(isset($_POST["sss"])){
        $fname = checkData($_POST["firstName"]);
        $lname = checkData($_POST["lastName"]);
        $email = checkData($_POST["email"]);
        //trim, stripsplashed, htmlspecialchars;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "not valid email";
        }
        echo $fname;
        var_dump($fname);
    }

    function checkData($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    echo  "Sa BABA";
    ?>
