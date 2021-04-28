<?php
include('dbconnection/config.php');
$userID = $_SESSION['userID'];
// REGISTER USER
if (isset($_POST['achieveButton'])) {
  // receive all input values from the form
    $schoolName = mysqli_real_escape_string($db, $_POST['schoolName']);
    $achidesc = mysqli_real_escape_string($db, $_POST['description']);


  // Finally, register user if there are no errors in the form
    $queryAchievement = "INSERT INTO `achievement` (`personal_id`, `ASName`, `achieve_desc`) VALUES ('$userID','$schoolName','$achidesc')";
  	mysqli_query($db, $queryAchievement);
      
  	header('location: achievements.php');

}

?>