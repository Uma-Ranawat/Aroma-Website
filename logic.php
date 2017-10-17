<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

include './connection.php';
$page = $_REQUEST['page'];

if ($page == "login") {
    
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $query1 = mysqli_query($con,"select * from `user` where `Email`='$email'");
        $msg = "0";
        $row = mysqli_fetch_array($query1);
        if ($row['Email'] == "admin@fruitkart.com" && $row['Password'] == "21232f297a57a5a743894a0e4a801fc3") {
            session_start();
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['LastName'] = $row['LastName'];
            $_SESSION['Email'] = $row['Email'];
            $msg = "1";
        } elseif ($row['Email'] == $email && $row['Password'] == $pass) {

            session_start();
            $_SESSION['UserID'] = $row['UserID'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['LastName'] = $row['LastName'];
            $_SESSION['Email'] = $row['Email'];
                $msg = "2";

        } else {
            $msg = "3";
        }
        
        echo $msg;
        //.........end........
        
} elseif ($page == "check_mail") {
    
        $email = $_POST['mail'];
        $qry = mysqli_query($con, "select Email from user where Email='$email'");
        $msg = "0";
        if (mysqli_affected_rows($con) > 0) {
            $msg = "1";
        } else {
            $msg = "0";
        }
        echo $msg;
        //........end..........
}
elseif ($page == "signup") {
    
        $fn = $_POST['fn']; 
        $ln = $_POST['ln'];
        $ps = md5($_POST['ps']);
        $email = $_POST['mail'];
        $qry2 = mysqli_query($con, "INSERT INTO `user`(`FirstName`,`LastName`,`Password`,`Email`) VALUES('$fn','$ln','$ps','$email')");

        $msg= "0";
        if (mysqli_affected_rows($con)!== 0) {

            $qry3 = mysqli_query($con, "select * from `user` where `Email`='$email'");
            if (mysqli_affected_rows($con) !== 0) {
                session_start();
                while ($row = mysqli_fetch_array($qry3)) 
                {  
                    $_SESSION['UserID'] = $row['UserID'];
                    $_SESSION['FirstName'] = $row['FirstName'];
                    $_SESSION['LastName'] = $row['LastName'];
                    $_SESSION['Email'] = $row['Email'];
                }
                $msg = "1";
            }
        }
        else 
        {
            $msg = "0";
        }
        echo $msg;
        //..........end.....
        
        
}
elseif ($_GET['value'] == 'retrieve') {
    $email = $_POST['txtemail'];
    $codee = rand(0, 9999999999);
    $get_Mailer_Name_q = "SELECT FirstName,LastName FROM user WHERE Email='$email'";
    $Mailer_Data = mysqli_query($con, $get_Mailer_Name_q);
    while ($mailRow = mysqli_fetch_array($Mailer_Data)) {
        $Mail_fname = $mailRow['FirstName'];
        $Mail_lname = $mailRow['LastName'];
    }
    $Maile_name = $Mail_fname . " " . $Mail_lname;

    require './PHPMailer-master/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "aromacreativity@gmail.com";

    //Password to use for SMTP authentication
    $mail->Password = "2810aroma0302";

    //Set who the message is to be sent from
    $mail->setFrom('aromacreativity@gmail.com', 'AromaCreations');

    //Set an alternative reply-to address
    $mail->addReplyTo('aromacreativity@gmail.com', 'AromaCreations');

    //Set who the message is to be sent to
    $mail->addAddress($email);

    //Set the subject line
    $mail->Subject = 'Aroma Creations Forget Password';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
//        $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));


    $txt = "<body>"
            . "<center>"
            . "<div style='border: 4px #00e5ff solid;padding-top:3%;padding-bottom:3%' width='250px'>"
            . "<table style='border:none'>"
            . "<tr>"
            . "<td><td><center><b style='font-size: 35px;color:#1a237e'>Aroma Creations</b></center></td>"
            . "</tr>"
            . "<tr>"
            . "<td><hr/></td>"
            . "</tr>"
            . "<tr>"
            . "<td><div style='background-color: white;'><br/>"
            . "<center style='font-size: 25px;color:#1a237e'>Welcome To Aroma Creations</center><hr/><br/>"
            . "<font style='font-size: 22px;'>Your Login Details</font><br/>"
            . "<font style='font-size: 20px;'>Name : " . $Maile_name . "</font><br/>"
            . "<font style='font-size: 20px;'>Email : " . $email . "</font><br/>"
            . "<font style='font-size: 20px;'>Activation Code : " . $codee . "</font><br/>"
            . "<font style='font-size: 20px;'>Reset Link : </font><font style='font-color:red;font-size: 20px'><a href = 'localhost/AromaCreations/retrive.php?type=mail'>Visit Link</a></font><br/>"
            . "</div>"
            . "</td>"
            . "</tr>"
            . "<tr>"
            . "<td><hr/></td>"
            . "</tr>"
            . "<tr>"
            . "<td>"
            . "<center><h3 style='background-color: whitesmoke'>"
            . "<font color='black'>From AromaCreations <br/></font>"
            . "</h3>If you didn't mean to reset your password,then you can just ignore this email;your 
password will not change.</center>"
            . "</td>"
            . "</tr>"
            . "</table>"
            . "</center></body>";
    $mail->msgHTML($txt);

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
//        $mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $sql1 = "update user set code='" . $codee . "' where Email='" . $email . "'";
        mysqli_query($con, $sql1);
        header("location:./retrive.php?type=mail");
    }
//    
//   
//               
//                if (!mail($to, $subject, $txt, $headers)) {
//        echo "Error not sent " . $mail->ErrorInfo;
//    } else {
//         $sql1 = "update user_details set ud_code='" . $codee . "' where ud_email='" . $email . "'";
//        mysqli_query($con, $sql1);
//        header("location:./retrive.php?type=mail");
//    }
    
    //................end............
} 
 elseif ($_GET['value'] == 'activate') {
    $email = $_POST['txtemail'];
    $code = $_POST['txtcode'];
    $mobile = $_POST['no'];
    $pass = md5($_POST['txtpass']);
    if ($email != '') {
        $sql = "select * from user where Email='" . $email . "'";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($res);
        if ($row['code'] == $code) {

            $sql1 = "update user set Password='" . $pass . "' where Email='" . $email . "'";
            if (mysqli_query($con, $sql1)) {
                echo "1";
//            echo "<a href=home.php>Click here</a> to Login";
                //header("Location:./Home.php");
            } else {
                echo "error" . mysqli_error($con);
            }
        } else {
            echo "2";
        }
        
    }
     elseif ($mobile != '') {
        $sql = "select * from user where MobileNumber='" . $mobile . "'";
        $res = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($res);
        if ($row['code'] == $code) {
            $sql1 = "update user set Password='" . $pass . "' where MobileNumber='" . $mobile . "'";
            if (mysqli_query($con, $sql1)) {
                echo "1";
//            echo "<a href=home.php>Click here</a> to Login";
            } else {
                echo "error" . mysqli_error($con);
            }
        } else {
            echo "2";
        }
    }
    
        //.........end..........
 }

?>
