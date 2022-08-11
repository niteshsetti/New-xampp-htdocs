<?php
session_start();
require '../php/connection.php';
if ($connection) {
    if (isset($_POST["contest"])) {
        $a = "Yarri".$_POST["contest"];
        $count = 0;
        $sql = "select *from registration where ContestId='$a'";
        $execute = mysqli_query($connection, $sql);
        @$fetch = mysqli_fetch_array($execute);
        @$otp=$fetch[5];
        if ($a==$otp) {
            $_SESSION["contest"]=$a;
            echo "Login";
        } else {
            echo "Login-Failed";
        }
    }
}
