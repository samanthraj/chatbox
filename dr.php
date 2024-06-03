<?php
  session_start();

  include("db.php");
  $qr = "select * from msg";
  $result = mysqli_query($conn,$qr);
  
  if(mysqli_num_rows($result)>0){

  while($data = mysqli_fetch_assoc($result)){
  $num =  $data["phone"];

    if($num==$_SESSION["phone"]){

?>

<p  style="align-self:end;">
<div class="user"style = "display:inline; font-size:10px  ;" >
<?= $_SESSION["username"]?>
</div>
<div class= "sender">
<?= $data["msg"]?>
    </div>

            </p>


<?php 



    }

    else{

?>
<p> 
    <div style="color: white;
    width:fit-content;
    background-color: #007AFF;
    border-radius: 5px;
    padding: 5px;
    margin-left: 10px;
   
    font-size:10px;">
    <?= $data["name"]?>
    </div>
    <div style="color: white;
    width:fit-content;
    background-color: #007AFF;
    border-radius: 5px;
    padding: 5px;
    margin-left: 10px;
    margin-bottom: 10px;">
    <?= $data["msg"]?>
    </div>

</p>
<?php

    }

}   ;



}else{
    echo "<h2>yeoossss lets start typing</h2>";
}




?>