<?php
	$id = $_REQUEST['id'];
	$course = $_REQUEST['C'];
	$sem = $_REQUEST['S'];
	$fees = $_REQUEST['F'];
	include "config.php";
	echo $id;
	$q="update `students` set course_name='$course',semester = '$sem',fees='$fees' where id='$id'";
	$result = mysqli_query($con,$q);
	if($result>0)
	{
		//echo "updated";
		header("location:select.php");
	}
	else{
		echo "not updated";
	}
?>	