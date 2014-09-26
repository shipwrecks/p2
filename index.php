<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>P2 - The xkcd Password Generator</title>
	<?php require 'logic.php'; ?>
</head>

<body>
	<h1>xkcd Password Generator</h1>
	<form method='GET' action='index.php'>
		<input type='text' name='amount'><br>
		<input type='submit' value='password please'><br>
	</form>
</body>

</html>