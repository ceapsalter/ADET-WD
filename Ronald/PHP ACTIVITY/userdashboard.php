<?php
session_start();
include('dbconnection/config.php');
include('session.php');

$userID = $_SESSION['userID'];
$queryPersonal = mysqli_query($db, "SELECT * FROM personal_details WHERE personal_id = '$userID' LIMIT 1");
$queryEducation = mysqli_query($db, "SELECT * FROM educational_attainment WHERE personal_id = '$userID '");
$queryAchievement = mysqli_query($db, "SELECT * FROM achievement WHERE personal_id = '$userID'");
while ($user_data = mysqli_fetch_array($queryPersonal)) {
    $firstName = $user_data['firstName'];
    $middleName = $user_data['middleName'];
    $lastName = $user_data['lastName'];
    $address = $user_data['address'];
    $phoneNumber = $user_data['phoneNumber'];
    $email = $user_data['email'];
    $birthDate = $user_data['birthDate'];
    $password = $user_data['password'];
    $age = $user_data['age'];
    $gender = $user_data['gender'];
    $maritalStatus = $user_data['maritalStatus'];
    $citizenship = $user_data['citizenship'];
    $religion = $user_data['religion'];
    $height = $user_data['height'];
    $weight = $user_data['weight'];
    $username = $user_data['username'];
}


?>
<html>

<head>
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <script src="../JavaScript/js/fontawesome.js" crossorigin="anonymous"></script>
    <link href="css/userdashboard.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <title>CURRICULUM VITAE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">User Dashboard</h3>
                <strong>UD</strong>
            </div>

            <ul class="list-unstyled components">

                <li class="active">
                    <a href="#">
                        <i class="fas fa-user-circle"></i>
                        Home
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <?php echo "<a href='edit.php?id=$userID'>"; ?>
                        <i class='far fa-edit'></i>
                        Edit Personal
                    </a>
                </li>
                    <div class="dropdown-divider"></div>
                <li>
                    <?php echo "<a href='educattain.php?id=$userID'>";?>
                        <i class='fas fa-user-graduate'></i>
                        Edit Education
                    </a>
                </li>
                    <div class="dropdown-divider"></div>
                <li>
                    <?php echo "<a href='achievements.php?id=$userID'>";?>
                        <i class="fas fa-trophy"></i>
                        Edit Achievement
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="../PHP/contactUs.php">
                        <i class="fas fa-phone-square-alt"></i>
                        Contact Us
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <button type="button" title="Logout" class="btn btn-dark">
                                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container img-thumbnail p-4 mb-5">
                <div class="panel-body">
                    <article class="panel-body">
                        <figure class="text-center">

                            <figcaption>
                                <?php
                                    echo "<strong><h1>" . $firstName . " " . $middleName . " " . $lastName . "</h1></strong>";
                                    echo $address;
                                    echo "<br>";
                                    echo "<strong>Contact No.:</strong> " . $phoneNumber;
                                    echo "<br>";
                                    echo "<strong>E-mail:</strong> " . $email;
                                ?>
                            </figcaption>
                        </figure>
                    </article>

                    <article>
                        <hr>
                        <h4>
                            <center>
                                <strong>PERSONAL DETAILS</strong>
                            </center>
                        </h4>
                        <hr>

                        <dl class="dl-horizontal text-center">
                            <div class="row">
                                <div class="col-sm-6">

                                    <?php
                                    echo "<dt>Date of Birth:</dt>";
                                    echo "<dd>" . $birthDate . "</dd>";
                                    ?>

                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Age:</dt>";
                                    echo "<dd>" . $age . " years old </dd>";
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Gender:</dt>";
                                    echo "<dd>" . $gender . "</dd>";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Marital Status:</dt>";
                                    echo "<dd>" . $maritalStatus . "</dd>";
                                    ?>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Citizenship:</dt>";
                                    echo "<dd>" . $citizenship . "</dd>";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Religion</dt>";
                                    echo "<dd>" . $religion . "</dd>";
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Height:</dt>";
                                    echo "<dd>" . $height . " cm </dd>";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    echo "<dt>Weight:</dt>";
                                    echo "<dd>" . $weight . " kg</dd>";
                                    ?>
                                </div>
                            </div>


                        </dl>
                    </article>

                    <article>
                        <hr>
                        <h4>
                            <center>
                                <strong>EDUCATION</strong>
                            </center>
                        </h4>
                        <hr>
                        <dl class="dl-horizontal text-center">
                            <?php
                            while ($educ_data = mysqli_fetch_array($queryEducation)) {
                                $schoolName = $educ_data['schoolName'];
                                $schoolLevel = $educ_data['schoolLevel'];
                                $course = $educ_data['course'];
                                $acadYear = $educ_data['year'];
                                echo "<dt>" . $acadYear . "</dt>";
                                echo "<dd><b>" . $schoolLevel . " </b>" . "($course)" . " | " . $schoolName . "</dd>";
                            }
                            ?>
                        </dl>
                    </article>

                    <article>
                        <hr>
                        <h4>
                            <center>
                                <strong>ACHIEVEMENTS</strong>
                            </center>
                        </h4>
                        <hr>
                        <dl class="dl-horizontal">
                            <ul>
                                <?php
                                while ($achieve_data = mysqli_fetch_array($queryAchievement)) {
                                    $ASName = $achieve_data['ASName'];
                                    $ach_desc = $achieve_data['achieve_desc'];

                                    echo "<li>" . $ach_desc . " | " .  $ASName . "</li>";
                                }
                                ?>

                            </ul>
                        </dl>
                    </article>
                </div>
            </div>

            <footer class="bg-dark text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    <a class="text-light" href="https://www.facebook.com/ronaldvergel.crisostomoii/">Ronald Vergel Dela Cruz</a>
                </div>
            </footer>
        </div>
    </div>


        <script type="text/javascript" src="../JavaScript/js/jquery-3.5.1.slim.js"></script>
        <script type="text/javascript" src="../JavaScript/js/popper.min.js"></script>
        <script type="text/javascript" src="../bootstrap-4.3.1/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>

</body>

</html>