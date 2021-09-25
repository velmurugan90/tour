<?php
include("conn.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname= $_POST["fullname"];
    $location = $_POST["location"];
 $price= $_POST["price"];
     $phno = $_POST["phno"];
    
    
//update data from table
$q = "
UPDATE register
SET
 password='".$password."',
 location='".$location."',
price='".$price."',
phno='".$phno."'

 WHERE username='".$username."'
 ";
$result = $conn->query($q);
    if($result== TRUE) {
        echo '<h1 style="color:green;text-align:center;">"Record updated success"</h1>';
    } else {
        echo '<h1>"Failed to update"</h1>';
    }
?>