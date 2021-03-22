<?php

    $username = "test";
    $password = "test123";

    session_start();

    if(isset($_SESSION['username'])){
        echo "<script>location.href='homepage.php'</script>";
    }else{
        if($_POST['username']==$username && $_POST['password']==$password ){
            $_SESSION['username']=$username;
            echo "<script>location.href='homepage.php'</script>";
        }else{
            echo"<script>alert('Username or Password is Incorrect !')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }
?>
