<?php
// include database connection file
include_once("dbconnection/config.php");

// Getid from URL to delete that user
$EducID = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM `educational_attainment` WHERE `educational_attainment`.`educational_id` = '$EducID'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:educattain.php");
?>