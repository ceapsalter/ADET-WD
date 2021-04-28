<?php
session_start();
include('dbconnection/config.php');
include('achievementValidation.php');
$userID = $_SESSION['userID'];
$queryAchievement = mysqli_query($db, "SELECT * FROM `achievement` WHERE personal_id = '$userID'");
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
                <li>
                    <?php echo "<a href='educattain.php?id=$userID'>";?>
                        <i class='fas fa-user-graduate'></i>
                        Edit Education
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li  class="active">
                    <a href="#">
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
                            <form class="signup_form" name="form" method="post" action="achievements.php">
                                <h2 class="valoFOnt text-center mb-3">Achievements</h2>
                                <div class="table-responsive">
                                    <table class="table table-light table-lg table-bordered table-hover">
                                        <thead class="thead-light text-nowrap">
                                            <tr>
                                                <th scope="col">School Name</th>
                                                <th scope="col">Achievement Description</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($user_data = mysqli_fetch_array($queryAchievement)) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $user_data['ASName'] . "</th>";
                                                echo "<td>" . $user_data['achieve_desc'] . "</td>";
                                                echo "<td class='text-center'><a href='editAchievements.php?id=$user_data[achievement_id]'><i class='fas fa-edit text-warning'></i></a> | <a href='deleteAchievement.php?id=$user_data[achievement_id]'><i class='far fa-trash-alt text-danger'></i></a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="valoFOnt text-center">Add</h4>
                                <div class="form-group row">
                                    <label for="schoolName" class="col-md-3 col-form-label text-md-right">School Name<span class="text-danger"> *</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="schoolName" name="schoolName" class="form-control" placeholder="School Name" required="required" autofocus title="First letter should be Capitalized!">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-3 col-form-label text-md-right">Description<span class="text-danger"> *</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="description" name="description" class="form-control" placeholder="Achievement Description" required="required" title="First letter should be Capitalized!">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <center>
                                        <button type="submit" class="btn-danger btn-circle btn-xl" name="achieveButton">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </center>
                                </div>
                            </form>
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