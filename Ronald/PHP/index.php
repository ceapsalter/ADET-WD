<html>

<head>
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="css/style.css" rel="stylesheet">
    <title>VALORANT</title>
</head>

<body>

    <div class="container">
        <div class="login-form">
            <form class="login_form" name="form" onsubmit="return validate()">
                <center>
                    <img class="icon mb-4" src="img/Valorant.png" alt="Avatar">
                </center>
                <h2 class="valoFont text-center mb-4">SIGN IN</h2>
                <div class="form-group">
                    <input type="text" name="user" id="user" class="form-control" placeholder="Username" required="required" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required="required">
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
                        <button type="submit" class="btn-danger btn-block pb-1" onclick="location.href='SignUp.html';">
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
