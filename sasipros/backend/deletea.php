<?php
include '../backend/db.php';
if(isset($_POST["dels"]))
{
    $parameter=$_POST["dels"];
    $sql="delete from qualifications where Param='$parameter'";
    $execute=mysqli_query($connection,$sql);
    if($execute)
    {
        echo "Success";
    }
    else{
        echo "Failed";
    }
}


if(isset($_POST["dels1"]))
{
    $parameter=$_POST["dels1"];
    $sql="delete from ranks where Param='$parameter'";
    $execute=mysqli_query($connection,$sql);
    if($execute)
    {
        echo "Success";
    }
    else{
        echo "Failed";
    }
}


if(isset($_POST["dels2"]))
{
    $parameter=$_POST["dels2"];
    $sql="delete from training where Param='$parameter'";
    $execute=mysqli_query($connection,$sql);
    if($execute)
    {
        echo "Success";
    }
    else{
        echo "Failed";
    }
}


if(isset($_POST["dels3"]))
{
    $parameter=$_POST["dels3"];
    $sql="delete from teaching where Param='$parameter'";
    $execute=mysqli_query($connection,$sql);
    if($execute)
    {
        echo "Success";
    }
    else{
        echo "Failed";
    }
}
?>