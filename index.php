<?php
session_start();
if(isset($_SESSION["username"] )&& isset($_SESSION["phone"])){

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <link rel ="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="cont">
    <div class="chatroom">
        <h1 >Chatroom</h1>
        <span style="text-align:center;color:#759dc9">welcome to chatroom <?php
        echo $_SESSION["username"] ?> </span>
        <div class="msg">
            <p><span>user:</span>
                
            </p>
            <p class="sender">
                aslnvfnfkvmnfkvnmn

            </p>
           
           


          
            


        </div>
        <div class="inputbox">
        <input type = "text" id= "messege">
        <button onclick = "update()">Send</button>
        <i class="fa-solid fa-face-smile" id = "emojibutton"></i>
    </div>
    </div>
</div>
<div class="emojilist active">
    <ul>
       
       
        
      
      

</ul>
</div>
<script src="logic.js">
    </script>

</body>
</html>
<?php

}else{
    header("Location: login.php");
exit();
}

?>




