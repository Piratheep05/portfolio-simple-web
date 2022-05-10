<?php
$con = mysqli_connect('localhost','id16783605_root','r2DD*]gE*8om[Y|w','id16783605_shanu');
     $name = $_GET['name'];
     $email = $_GET['email'];
     $msg = $_GET['msg'];
 $sql = "INSERT INTO `shanu`(`name`, `email`, `text`) VALUES ('$name','$email','$msg')";
 $result = mysqli_query($con,$sql);
 ?>
      
   