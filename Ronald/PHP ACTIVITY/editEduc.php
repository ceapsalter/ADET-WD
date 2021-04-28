<?php
// include database connection file
session_start();
include_once("dbconnection/config.php");
$userID = $_SESSION['userID'];
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['updateEduc'])) {
    $educID = $_POST['educID'];

    $inputschoolName = $_POST['schoolName'];
    $inputschoolLevel = $_POST['schoolLevel'];
    $inputcourse = $_POST['course'];
    $inputinclusiveYear = $_POST['inclusiveYear'];
    // update user data.
    $queryEducation = mysqli_query($db, "UPDATE `educational_attainment` SET `schoolName`='$inputschoolName',`schoolLevel`='$inputschoolLevel',`course`='$inputcourse',`year`='$inputinclusiveYear' WHERE `educational_id`='$educID'");

    // Redirect to homepage to display updated user in list
    header("Location: educattain.php");
}
// Display selected user data based on id
// Getting id from url
$educID = $_GET['id'];

// Fetech user data based on id
$queryEducation = mysqli_query($db, "SELECT * FROM `educational_attainment` WHERE educational_id = '$educID'");

while ($educ_data = mysqli_fetch_array($queryEducation)) {
    $schoolName = $educ_data['schoolName'];
    $schoolLevel = $educ_data['schoolLevel'];
    $course = $educ_data['course'];
    $inclusiveYear = $educ_data['year'];
}
?>
<html>

<head>
    <link href="../bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <script src="../JavaScript/js/fontawesome.js" crossorigin="anonymous"></script>
    <link href="css/userdashboard.css" rel="stylesheet">
    <title>VALORANT</title>
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

                <li>
                    <a href="userdashboard.php">
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
                <li class="active">
                    <a href="#">
                        <i class='fas fa-user-graduate'></i>
                        Edit Education
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <?php echo "<a href='achievements.php?id=$userID'>"; ?>
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
                    <div class="container-sign">
                        <div class="signup-form">
                            <form class="signup_form" name="form" method="post" action="editEduc.php">
                                <h2 class="valoFOnt text-center mb-3">Educational Attainment</h2>
                                <div class="form-group row">
                                    <label for="schoolName" class="col-md-3 col-form-label text-md-right">School Name<span class="text-danger"> *</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="schoolName" name="schoolName" class="form-control" placeholder="School Name" required="required" autofocus title="First letter should be Capitalized!" value="<?php echo $schoolName; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="schoolLevel" class="col-md-3 col-form-label text-md-right">School Level<span class="text-danger"> *</span></label>
                                    <div class="col-md-9">
                                        <select class="input-group-text form-control" id="schoolLevel" name="schoolLevel" required="required">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="Primary">Primary</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Elementary">Elementary</option>
                                            <option value="High School">High School</option>
                                            <option value="Vocational Technology">Vocational Technology</option>
                                            <option value="College">College</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="course" class="col-md-3 col-form-label text-md-right">Course<span class="text-danger"> *</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="course" name="course" class="form-control" placeholder="Course" required="required" title="First letter should be Capitalized!" value="<?php echo $course; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inclusiveYear" class="col-md-3 col-form-label text-md-right">Inclusive Year<span class="text-danger"> *</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="inclusiveYear" name="inclusiveYear" class="form-control" placeholder="Inclusive Year" required="required" autofocus title="Enter range of inclusive year!" value="<?php echo $inclusiveYear; ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="educID" value=<?php echo $educID; ?>>
                                <div class="form-group">
                                    <center>
                                        <button type="submit" class="btn-danger btn-circle btn-xl" name="updateEduc">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
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
    <script type="text/javascript" src="js/validation.js"></script>
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