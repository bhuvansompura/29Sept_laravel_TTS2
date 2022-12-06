<?php 

header ("Access-control-Allow-Origin:*");
header("Access-control-allow-header:*");
 if (isset($_POST['header_redirection'])) {
    header("location:otherpage.php");
 }
 if (isset($_POST['header_download'])) {
    $size = filesize("Image.png");
header('Content-Description: File Transfer');
header('Content-Type:image/iphone 14.png');
header('Content-Disposition: attachment; filename="Image.png"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . $size);
readfile("iphone 14.png");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Header</h2>
    <ul>
        <li>header() will helps to redirect, modified HTTP header, file download </li>
    </ul>
    <form method="post">
        <input type="submit" name="header_redirection" value="redirect to other page">
        <input type="submit" src="image/iphone 14.png" name="header_download" id="Download" value="download"> 
         <input type="image" src="image/iphone 14.png" alt="Download">
    </form>
</body>
</html>