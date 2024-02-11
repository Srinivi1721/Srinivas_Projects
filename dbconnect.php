<?php
$sername="localhost";
$username="root";
$password="";
$dbname="php_child_vaccination";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{die("Connection failed:".$conn->connect_error);
}
?>

 