<?php

$Name = $_POST['Name'];
$MobileNo = $_POST['PhoneNo'];
$mailid = $_POST['mailid'];
$Totalno = $_POST['totalno']


$conn = new mysqli('localhost','root','','Hotel');

if($conn->connect_error){
   die("Connection Failed :" $conn->connect_error);
 }
    else{  


    $stmt -> $conn->prepare("insert into id(Name,Mobileno,emailid,totalno)
        values(?,?,?,?)");
    $stmt -> bind_param("siss",$Name,$PhoneNo,$emailid,$Totalno);

    $stmt -> execute();
    echo "Thank You For Registration";
    $stmt -> close();
    $con -> close();



}

?>







