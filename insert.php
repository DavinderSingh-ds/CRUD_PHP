<?php
//get values
$c = $_REQUEST['C'];
$s = $_REQUEST['S'];
$f = $_REQUEST['F'];

include "config.php";

// table query
$query = "insert into `students`(`course_name`,`semester`,`fees`)values('$c','$s','$f')";

//Result
$result = mysqli_query($con,$query);

if($result>0)
	{
		//echo "data inserted";
		header("location:select.php");
	}
	else{
		echo "not inserted<br>";
		echo mysqli_error($con);
	}
?>