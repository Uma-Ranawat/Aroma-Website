<?php
session_start();
include './connection.php';


$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];

$query="INSERT INTO registration(`username`,`lastname`,`password`,`email`) VALUES('$fname','$lname','$password','$email')";
    if(mysqli_query($con, $query))
    {
//        $_SESSION['user']="u_login";
//        echo 'you have been registered';
    include './successful.php';
    }
 else {
     echo $fname;
        echo 'error';  
        session_destroy();
}
?>
