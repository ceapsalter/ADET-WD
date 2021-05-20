<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'final_exam';
$databaseUsername = 'root';
$databasePassword = '';

$db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>