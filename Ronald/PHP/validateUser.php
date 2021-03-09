<?php
        if(isset($_POST["firstName"])){
            $fname = checkData($_POST["firstName"]);
            $lname = checkData($_POST["lastName"]);
            $email = checkData($_POST["email"]);

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Not Valid Email!";
            }

            echo $lname;
            echo "<br>";
            echo $fname;
        }

        function checkData($value){
            $value = trim($value);
            $value = stripcslashes($value);
            $value = htmlspecialchars($value);
            return $value;
        }
?>
