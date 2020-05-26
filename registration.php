<!-- Registration page -->
<?php
require_once("registration1.php");
require_once("table.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User register</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="regstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
</head>
<body><br>
	<br>
	<div class="container">
		<div id="h1">
			<h1>Registration</h1><hr>
		</div>
		<form action="regsuccess.php" method="POST">
		<label for="fname"><strong>Name:</strong></label><br>
		<input type="text" placeholder="Name" id="fname" name="names" required><br>
	    <label for="pass"><strong>Roll No:</strong></label><br>
	    <input type="text" placeholder="Roll No" id="pass" name="roll" required><br>
		<input type="submit" name="create" value="Sign Up" class="btn btn-secondary">
	</form>
	</div>
	<?php
	require_once("table.php");
	?>
</body>
</html>