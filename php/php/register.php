<?php
require './connection.php';
if ($connection) {
    if (isset($_POST["firstname"]) || isset($_POST["lastname"]) || isset($_POST["redgno"]) || isset($_POST["email"])) {
        $a = $_POST["firstname"];
        $b = $_POST["lastname"];
        $c = $_POST["redgno"];
        $d = $_POST["email"];
        $cap = strtoupper($c);
        $enquiry = "select *from registration where Redgno='$cap'";
        $check = mysqli_query($connection, $enquiry);
        $count = mysqli_num_rows($check);
        $email_enquiry = "select *from registration where Email='$d'";
        $email_check = mysqli_query($connection, $email_enquiry);
        $email_count = mysqli_num_rows($email_check);
        if ($count > 0) {
            echo "Registration Number Exists !!!";
        } else if ($email_count > 0) {
            echo "Email Already Exists !!!";
        } else {
            $sql = "insert into registration(First,Last,Redgno,Email,ContestId)values('$a','$b','$cap','$d','Null')";
            $execute = mysqli_query($connection, $sql);
            if ($execute) {
                $from = "nitesh.setti2001@gmail.com";
                $to = $d;
                $otp = "Yarri" . rand(1000, 9000);
                $body = 'Thanks for Registered to this contest your Contest-ID is' . $otp;
                $mail = mail($to, $from, $body);
                if ($mail) {
                    $update = "update registration set ContestId='$otp' where Email='$d'";
                    $update_execute = mysqli_query($connection, $update);
                    if ($update_execute) {
                        echo "Contest-ID Send to Your Mail Successfully";
                    }
                }
            } else {
                echo "Data Failed";
            }
        }
    }
}
