<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/contactStyle.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/xftl4khk1g7s07pylv514af7o2py6oex4op7hgkuty8yi8x2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>
    <?php
        include("validateMidterm.php");
    ?>
<body>

    <div class="container">
        <div class="contactUs-form">
            <form class="contactUs-form" name="form" method="get" action="validateMidterm.php">
                <center>
                    <img class="icon mb-4" src="img/Valorant.png" alt="Avatar">
                </center>
                <h1 class="valoFont text-center mb-4">MIDTERM EXAMINATION</h1>

                <!-- Email -->
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required" autofocus>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <input pattern="^(?=.*[A-Za-z])(?=.*\d).{8,}$" type="password" id="password" class="form-control" name="password" placeholder="Password" required="required" >
                </div>

                <!-- Send Button -->
                <div class="form-group">
                    <center>
                        <button type="submit" class="btn-danger btn-circle btn-xl">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </button>
                    </center>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
