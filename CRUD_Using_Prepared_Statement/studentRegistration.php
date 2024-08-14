<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration</title>

	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

	<form action="con_studentRegistration.php" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="name"></td>
			</tr>
			<tr>
				<td>Enrollment</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="enrollment"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input class="form-control" type="password" name="password"></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="branch"></td>
			</tr>
			<tr>
				<td>Sem</td>
				<td>:</td>
				<td>
					<select name="sem" class="form-select">
						<?php
							for ($i=1; $i < 9; $i++) { 
								echo "<option>".$i."</option>";
							}
						?>
						<!-- <option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option> -->
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" value="Save">
				</td>
			</tr>

		</table>

	</form>

</body>
</html>