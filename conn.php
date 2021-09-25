<?php
$servername="127.0.0.1";
$username="root";
$password="";
$db="tour";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
echo $conn->connect_error;
die("sorry database not connected");
}

?>