<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Detail</title>

	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

	<?php
		include_once "./classes/Student.php";

		$s = new Student();

		$stuDetail = $s->getStudentById($_GET['id']);
	?>

	<h1>Detail of  a student</h1>

	<a class="btn btn-primary" href="listStudents.php">Back</a>

	<table class="table table-striped">
		<tr>
			<th>Id</th>
			<td><?php echo $stuDetail['id']; ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $stuDetail['name']; ?></td>
		</tr>
		<tr>
			<th>Enrollment</th>
			<td><?php echo $stuDetail['enrollment']; ?></td>
		</tr>
		<tr>
			<th>Branch</th>
			<td><?php echo $stuDetail['branch']; ?></td>
		</tr>
		<tr>
			<th>Sem</th>
			<td><?php echo $stuDetail['sem']; ?></td>
		</tr>
	</table>

</body>
</html>