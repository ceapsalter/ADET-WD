<?php
    include 'dbconnection/config.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
        $age=$_POST['age'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "INSERT INTO `students`( `name`,`age`,`email`,`phone`,`city`) 
		VALUES ('$name','$age','$email','$phone','$city')";
		if (mysqli_query($db, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
		mysqli_close($db);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
        $age=$_POST['age'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "UPDATE `students` SET `name`='$name',`age`='$age',`email`='$email',`phone`='$phone',`city`='$city' WHERE id=$id";
		if (mysqli_query($db, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
		mysqli_close($db);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `students` WHERE id=$id ";
		if (mysqli_query($db, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
		mysqli_close($db);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM students WHERE id in ($id)";
		if (mysqli_query($db, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
		mysqli_close($db);
	}
}

?>