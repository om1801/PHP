<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Student</title>

	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

	<h1>Student List</h1>

	<table class="table table-striped table-hover">
		<tr>
			<th>Enrollment</th>
			<th>Name</th>
			<th>Details</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php
			include_once "./classes/Student.php";

			$s = new Student();

			$stuArray = $s->getAllStudents();
			foreach ($stuArray as $key => $value) {
		?>

			<tr>
				<td><?php echo $value['enrollment'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><a class="btn btn-info" href="detailStudent.php?id=<?php echo $value['id'] ?>">Know More...</a></td>
				<td><a class="btn btn-warning"  href="editStudent.php?id=<?php echo $value['id'] ?>">Edit</a></td>
				<td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');"  href="con_deleteStudent.php?id=<?php echo $value['id'] ?>">Delete</a></td>
			</tr>

		<?php
			}
		?>
	</table>

</body>
</html>