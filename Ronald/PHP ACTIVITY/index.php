<?php

include("dbconnection/config.php");
session_start();

$error = "";

if (isset($_SESSION['login_user'])) {
    header('location: userdashboard.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from personal_details where username = '$username' && password = '$password'";

    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    $user_data = mysqli_fetch_array($result);
    $login_id = $user_data['personal_id'];
    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        $_SESSION['userID'] = $login_id;

        header('location: userdashboard.php');
    } else {
        $error = "Username or Password is invalid!";
    }
}
?>
<html>

<head>
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/98a2b5e7f0.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>VALORANT</title>
</head>

<body>

    <div class="container">
        <div class="login-form">
            <form action="index.php" method="post" class="login_form" name="form">
                <center>
                    <img class="icon mb-4" src="img/Valorant.png" alt="Avatar">
                </center>
                <h2 class="valoFont text-center mb-4">SIGN IN</h2>

                <div class="error_mess"><?php echo $error; ?></div>
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                </div>

                <div class="form-group">
                    <center>
                        <button type="submit" class="btn-danger btn-circle btn-xl">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </center>
                </div>
                <hr>
                <div class="form-group">
                    <center>
                        <button class="btn-danger btn-block pb-1" onclick="location.href='signup.php';">
                            Sign up New Account
                        </button>
                    </center>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="../JavaScript/js/jquery-3.5.1.slim.js"></script>
    <script type="text/javascript" src="../JavaScript/js/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
</body>

</html>