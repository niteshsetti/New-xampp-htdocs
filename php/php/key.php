<?php
session_start();
require 'connection.php';
$get_details=$_SESSION["contest"];
$sql="select *from registration where ContestId='$get_details'";
$execute=mysqli_query($connection,$sql);
@$fetch=mysqli_fetch_array($execute);
@$contest_id=$fetch[1];