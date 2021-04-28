<?php
include('dbconnection/config.php');
$userID = $_SESSION['userID'];
// REGISTER USER
if (isset($_POST['educButton'])) {
  // receive all input values from the form
    $schoolName = mysqli_real_escape_string($db, $_POST['schoolName']);
    $schoolLevel = mysqli_real_escape_string($db, $_POST['schoolLevel']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
    $inclusiveYear = mysqli_real_escape_string($db, $_POST['inclusiveYear']);
    /*
    $achSName = mysqli_real_escape_string($db, $_POST['achSName']);
    $achidesc = mysqli_real_escape_string($db, $_POST['achidesc']);*/


  // Finally, register user if there are no errors in the form
    $queryEducation = "INSERT INTO `educational_attainment` (`personal_id`, `schoolName`, `schoolLevel`, `course`, `year`) VALUES ('$userID','$schoolName','$schoolLevel','$course','$inclusiveYear')";
    // '$achSName','$achidesc';
  	mysqli_query($db, $queryEducation);
      
  	header('location: educattain.php');

}

?>