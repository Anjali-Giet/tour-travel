<?php
   $db_hostname="127.0.0.1";
   $db_username="root";
   $db_password="";
   $dn_name="";
   $conn = mysqli_connect ($db_hostname,$db_username,$db_password,$dn_name);  
   if(!conn){
    echo "connection failed";
   }
   $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  echo $name."<br/>";
  echo $email."<br/>";
  echo $password."<br/>";
  ?>
 