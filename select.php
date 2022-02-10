<?php
	include "config.php";
	$query = "select * from `students`";
	$result = mysqli_query($con,$query);
?>

<html>
	<head>
		<title>Select</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table border="3">
			<tr>
				<th>ID</th>
				<th>Course Name</th>
				<th>Semester</th>
				<th>Fees</th>
                <th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php 
				$i=1;
				while($arr=mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $arr[1];?></td>
				<td><?php echo $arr[2];?></td>
				<td><?php echo $arr[3];?></td>   
                <td><a href="edit.php?id=<?php echo $arr['id']; ?>">Edit</a></td>
				<td><a href="delete.php?id=<?php echo $arr['id'];?>">Delete</a></td> 
			</tr>
			<?php $i++;  }?>
		</table>
        <a href="delete_all.php"><input type="button" value="Delete All"></a>
	</body>
</html>

<!------------>
<!------<td> //echo $arr['id']; </td>-------- 1 2 3 are corse_name,semester and id----->
