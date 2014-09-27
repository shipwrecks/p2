<?php
error_reporting(E_ALL);   	# Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>P2 - The xkcd Password Generator</title>
    <?php require 'logic.php'; ?>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <h1>xkcd Password Generator</h1>
    <p>
   	 I am a password generator.  Please fill out your requirements below, click on the
   	 generate button, and I'll create a password for you to use.
    </p>

    <form method="GET" action="index.php">
   	 <label name="count">How many words? (max 7)</label>
   	 <input type="text" id="count" name="count" /><br>

   	 <label name="number">Include a number?</label>
   	 <input type="checkbox" id="number" name="number" /><br>

   	 <label name="symbol">Include a symbol?</label>
   	 <input type="checkbox" id="symbol" name="symbol" /><br>

   	 <input type="submit" value="generate!"><br>
    </form>

    <h2>Your new password is: </h2>
</body>

</html>

