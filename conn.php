<?php

$servarname="localhost";
$username="root";
$password="";
$database="lms";

$conn=mysqli_connect($servarname,$username,$password,$database);
if(!$conn)
{
  die("conection is not working");
}

?>