<?php
   $place name = $_POST['palce name'];
   $number of guests = $_POST['number of guests'];
   $Arrival date = $_POST['Arrival date'];
   $leaving date = $_POST['leaving date'];

   //database connection
   $conn = new mysql('localhost','root','','test');
   if($conn-> connect_error){
     die('connection failed : '.$conn->connect_error);
   }
   else{
    $stmt = $conn->prepare("insert into book now(palce name, number of guests,Arrival date,leaving date)
       values(?,?,?,?)")
    $stmt->bind_param("sidd",$palce name, $number of guests,$Arrival date,$leaving date);
    $stmt -> execute();
    echo "Booked successfully🙂";
    $stmt->close();
    $conn->close();
         

   
   }
?>