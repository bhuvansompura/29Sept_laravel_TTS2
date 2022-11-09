<?php

echo "<pre>";
echo "<br>========== Get ==============<br>";

print_r($_GET);
print_r($_GET['username']);

echo "<br>========== Post ==============<br>";
print_r($_POST);

echo "<br>========== Request ==============<br>";
print_r($_REQUEST);

echo "<br>========== Globals ==============<br>";
print_r($GLOBALS);

echo "</pre>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Get and Post</title>

</head>
<body>
    
<h1>Data Get and Post</h1>
<p>get use URL for sending data to the server has limitation of 2048 char only faster than post doent support file uploding</p>
<form method="get">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="Submit" name="btn" id="btn">
</form>
<p>post more secure then get becouse it doent use URL no limitation and support file uploding</p>
<form method="post">
<input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="Submit" name="btn" id="btn">
</form>

</body>
</html>

