<?php
include '../backend/db.php';
if(isset($_POST["a"]) || isset($_POST["b"]) ||isset($_POST["c"]) ||isset($_POST["d"]) ||isset($_POST["e"]))
{
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $d=$_POST["d"];
    $e=$_POST["e"];
    $sql="update ranks set Rtype='$a',Rcoll='$b',Rdate='$c',Rdes='$d' where Param='$e'";
    $exe=mysqli_query($connection,$sql);
    if($sql)
    {
        echo "Success";
    }
    else
    {
        echo "Failed";
    }
}

if(isset($_POST["a1"]) || isset($_POST["b1"]) ||isset($_POST["c1"]) ||isset($_POST["d1"]) ||isset($_POST["e1"])
 || isset($_POST["f1"]) || isset($_POST["g1"]))
{
    $a1=$_POST["a1"];
    $b1=$_POST["b1"];
    $c1=$_POST["c1"];
    $d1=$_POST["d1"];
    $e1=$_POST["e1"];
    $f1=$_POST["f1"];
    $g1=$_POST["g1"];
    $sql="update training set Pfrom='$a1',pto='$b1',Tper='$c1',Nop='$d1',Institution='$e1',
     Remarks='$f1'
     where Param='$g1'";
    $exe=mysqli_query($connection,$sql);
    if($sql)
    {
        echo "Success";
    }
    else
    {
        echo "Failed";
    }
}

if(isset($_POST["a2"]) || isset($_POST["b2"]) ||isset($_POST["c2"]) ||isset($_POST["d2"]) ||isset($_POST["e2"])
 || isset($_POST["f2"]) || isset($_POST["g2"]))
{
    $a2=$_POST["a2"];
    $b2=$_POST["b2"];
    $c2=$_POST["c2"];
    $d2=$_POST["d2"];
    $e2=$_POST["e2"];
    $f2=$_POST["f2"];
    $g2=$_POST["g2"];
    $sql="update teaching set Pheld='$a2',Status='$b2',Df='$c2',Dt='$d2',Fraction='$e2',
     Insti='$f2'
     where Param='$g2'";
    $exe=mysqli_query($connection,$sql);
    if($sql)
    {
        echo "Success";
    }
    else
    {
        echo "Failed";
    }
}
?>