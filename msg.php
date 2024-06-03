<?php
session_start();
include ("db.php");
$msg = $_GET["msg"];
$num = $_SESSION["phone"];


$name = $_SESSION["username"];
$phone = $_SESSION["phone"];
$sql4 = "select username,phone from users where username = '$name' and phone = '$phone'";
$res = mysqli_query($conn,$sql4);
if($res!=NULL){
$que = "INSERT INTO  msg( `msg`, `phone`,`name`) VALUES ('$msg','$num','$name ')";
$sol = mysqli_query($conn,$que);



}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>


