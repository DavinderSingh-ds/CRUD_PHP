<?php
	$id = $_REQUEST['id'];
	include "config.php";
	$q = "select * from `students` where id ='$id'";
	$result = mysqli_query($con,$q);
	$arr = mysqli_fetch_array($result);
?>

<html>
	<body>
		<form method="post" action="update.php">	
			<input hidden type="text" value="<?php echo $id; ?>" name="id">
			<label>Course Name</label><input type="text" name="C" value="<?php echo $arr['course_name'];?>">
			<label>Semester</label><input type="text" name="S" value="<?php echo $arr['semester'];?>">
			<label>Fees</label>
			<?php
				echo "<input type='text' name='F' value='$arr[3]'>";
			?>
			<input type="submit" value="Update">
		</form>
	</body>
</html>