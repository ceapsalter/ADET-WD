<?php

include("dbconnection/config.php");
session_start();

$error = "";

if (isset($_SESSION['login_user'])) {
    header('location: home.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from account where username = '$username' && password = '$password'";

    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    $user_data = mysqli_fetch_array($result);
    $login_id = $user_data['id'];
    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        $_SESSION['userID'] = $login_id;

        header('location: home.php');
    } else {
        $error = "Username or Password is invalid!";
    }
}
?>
<html>

<?php include 'header.php' ?>

<body>

    <div class="container">
        <div class="login-form">
            <form action="index.php" method="post" class="login_form" name="form">
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
            </form>
        </div>
    </div>


</body>

</html>
<?php include 'footer.php' ?>