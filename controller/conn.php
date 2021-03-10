<?php
 $conn=new mysqli("localhost","root","","sms");
 if($conn->connect_error) {
     die("erorr".$conn->connect_error);
 } 
?>