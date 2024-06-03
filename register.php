<?php
session_start();
include("db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel ="stylesheet" href="style.css" >
   
</head>
<body >  
 
    <div class="cont">
    
        <div class="chatroom" >
        <h1 style="color:white; display:inline">Register</h1> 
        <form method="post" action = "register.php">
<p style="color:white;font-size:20px;text-align:center">Name<p>
    <input type="text" name="uname" style="margin-left:80px">
    
<p style="color:white;font-size:20px;text-align:center">Phone number<p>
    <input type="text" name="phone" style="margin-left:80px">

<button style="height:50px;width:150px;position:relative;top:50px;left:130px;font-size:16px">Register</button>

        </form>
        </div>
    </div>
  
</body>
</html>



<?php

$name = $_POST["uname"];
$phone = $_POST["phone"];
$kr = "insert into users (username,phone) values ('$name', '$phone')";
$ri = mysqli_query($conn,$kr);
if(isset($ri)){
    header("Location:login.php");
}
else{
    echo "there is an error i server side";
}

?>
