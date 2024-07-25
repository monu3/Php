<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>

<?php include "./session.php" ?>

<?php 
    setcookie("name","monu",time()+86400*30);
    echo $_COOKIE['name'];


$lang =$_SESSION['language'];
echo $lang = "EN"?"English":"napali";

?>
</body>
</html>