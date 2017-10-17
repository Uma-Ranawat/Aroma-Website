<?php
include './connection.php';
$a = "";
$v = false;
if (isset($_GET['retrieveemail'])) {
    if (filter_var($_GET['retrieveemail'], FILTER_VALIDATE_EMAIL)) {
        $sql = "select Email from user where Email='" . $_GET['retrieveemail'] . "'";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($res);
        if ($row['Email'] == $_GET['retrieveemail']) {
            $a = "";
            $v = true;
        } else {
            $a = "Email Not Found";
            $v = false;
        }
    } else {
        $a = "Invalid email";
        $v = false;
    }
}
elseif (isset($_GET['mobile'])) {

    $sql = "select MobileNumber from user where MobileNumber='" . $_GET['mobile'] . "'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    if ($row['MobileNumber'] == $_GET['mobile']) {
        $a = "";
        $v = true;
    } else {
        $a = "Mobile No. Not Found";
        $v = false;
    }
}
elseif (isset($_GET['txtpass'])) {
    if ($_GET['txtpass'] == null) {
        $a = "Empty";
        $v = false;
    }
    else if (strlen($_GET['txtpass']) < 8) {
        $a = "( Password must be greater than 8 characters )";
        $v = false;
    }
    else {
        $a = "";
        $v = true;
    }
} 
echo $a . "||" . $v;
    