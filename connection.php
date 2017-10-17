<?php

$con = mysqli_connect("localhost", "root", "", "aroma");
//if (!$con) {
//    mysqli_error($con);
//} else {
//    
//}
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
   //echo "Connected successfully";
}
?>