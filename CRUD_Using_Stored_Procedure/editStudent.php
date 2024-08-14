<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Detail Update</title>

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

	<form action="con_editStudent.php" method="post">
		<input type="hidden" name="id" value="<?php echo $stuDetail['id']; ?>">
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="name" value="<?php echo $stuDetail['name']; ?>"></td>
			</tr>
			<tr>
				<td>Enrollment</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="enrollment" value="<?php echo $stuDetail['enrollment']; ?>"></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="branch" value="<?php echo $stuDetail['branch']; ?>"></td>
			</tr>
			<tr>
				<td>Sem</td>
				<td>:</td>
				<td>
					<select class="form-select" name="sem">
						<?php
							for ($i=1; $i < 9; $i++) { 
								if ($stuDetail['sem'] == $i) {
									echo "<option selected>".$i."</option>";
								}
								else{
									echo "<option>".$i."</option>";
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a class="btn btn-primary" href="listStudents.php">Cancle</a>
					<input class="btn btn-success" type="submit" value="Save">
				</td>
			</tr>

		</table>

	</form>

</body>
</html>