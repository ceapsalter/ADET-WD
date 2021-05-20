<?php
session_start();
include('dbconnection/config.php');
include('session.php');

$userID = $_SESSION['userID'];

?>
<html>

<?php include 'header.php' ?>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">FINAL EXAMINATION</h3>
                <strong>F.E</strong>
            </div>

            <ul class="list-unstyled components">

                <li class="active">
                    <a href="#">
                        <i class="fas fa-home ml-2"></i>
                        Home
                    </a>
                </li>

                <li>
                    <a href="manage.php">
                        <i class="fas fa-user-graduate ml-2"></i>
                        Manage Students
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

            <div class="jumbotron text-center">
                <div class="panel-body">
                    <article class="panel-body">
                        <div class="example-container">
                            <label for='checkbox'>
                                Click Bait 👆🏼
                            </label>
                            <input id='checkbox' type='checkbox' />
                            <div class="example">
                                <img class="img-fluid mx-auto d-block img-thumbnail" src="img/Thank You.gif">
                                <b>Thank You for All the Lessons Sir Psalter Cea! 👨‍💻</b>
                            </div>
                        </div>
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




</body>

</html>

<?php include 'footer.php' ?>