<?php
session_start();

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
        <h1 style="color:white; display:inline">Login Page</h1> 
        <form method="post" action = "login.php">
<p style="color:white;font-size:20px;text-align:center">Name<p>
    <input type="text" name="uname" style="margin-left:80px">
    
<p style="color:white;font-size:20px;text-align:center">Phone number<p>
    <input type="text" name="phone" style="margin-left:80px">

<button style="height:50px;width:150px;position:relative;top:50px;left:130px;font-size:16px">Login</button>
<a href="register.php"  >don't have an account?
    Sign Up
</a>
        </form>
        </div>
    </div>
  
</body>
</html>

<?php
$host = "localhost";
$username = "root";
$db = "chatroom";
$pass = "";
$conn = mysqli_connect($host,$username,$pass,$db);

$user = $_POST["uname"];
$phone = $_POST["phone"];

$sql = "select username,phone from users where username='$user' and phone = '$phone'";
$r = mysqli_query($conn,$sql);

if (isset($_POST["uname"]) && isset($_POST["phone"])) 
{
if(mysqli_num_rows($r)>0){
$_SESSION["username"]= $user;
$_SESSION["phone"]=$phone;
header("Location:index.php");
exit;
}
else{
   
echo "user not found"
;
}
}
else{
echo "username or phone number is not entered";
}







// $fr = mysqli_fetch_assoc($r);
// echo $fr["username"];


?>