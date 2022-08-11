<?php
include '../backend/db.php';

// Form1  raac

if(isset($_POST["a222"]) || isset($_POST["b22"]) ||isset($_POST["c22"]) ||isset($_POST["d22"]) ||isset($_POST["e22"]) )
{
    $a222=$_POST["a222"];
    $b22=$_POST["b22"];
    $c22=$_POST["c22"];
    $d22=$_POST["d22"];
    $e22=$_POST["e22"];
   
    $sql="update raac set top='$a222',top1='$b22',numb='$c22',maob='$d22' where Param='$e22'";
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


// FDorm 2 OEXTRA

if(isset($_POST["a10"]) || isset($_POST["b10"]) ||isset($_POST["c10"]) ||isset($_POST["d10"]) ||isset($_POST["e10"]) )
{
    $a10=$_POST["a10"];
    $b10=$_POST["b10"];
    $c10=$_POST["c10"];
    $d10=$_POST["d10"];
    $e10=$_POST["e10"];
   
    $sql="update oextra set a2='$a10',b2='$b10',c2='$c10',d2='$d10' where Param='$e10'";
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

// Form 3 ifactor

if(isset($_POST["a23"]) || isset($_POST["b23"]) ||isset($_POST["c23"]) ||isset($_POST["d23"]) )
{
    $a23=$_POST["a23"];
    $b23=$_POST["b23"];
    $c23=$_POST["c23"];
    $d23=$_POST["d23"];
   
    $sql="update ifactor set Rb='$a23',Marks='$b23',Marksob='$c23' where Params='$d23'";
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

// Form 4 book publications

if(isset($_POST["a24"]) || isset($_POST["b24"]) ||isset($_POST["c24"]) ||isset($_POST["d24"]) ||isset($_POST["e24"]) )
{
    $a24=$_POST["a24"];
    $b24=$_POST["b24"];
    $c24=$_POST["c24"];
    $d24=$_POST["d24"];
    $e24=$_POST["e24"];
   
    $sql="update bookspub set Top='$a24',Nop='$b24',Mpp='$c24',Ma='$d24' where Param='$e24'";
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


// Form 5 research Project - Sponsored Projects carried out/ ongoing


if(isset($_POST["a25"]) || isset($_POST["b25"]) ||isset($_POST["c25"]) ||isset($_POST["d25"]) ||isset($_POST["e25"]) )
{
    $a25=$_POST["a25"];
    $b25=$_POST["b25"];
    $c25=$_POST["c25"];
    $d25=$_POST["d25"];
    $e25=$_POST["e25"];
   
    $sql="update bookspub set Top='$a25',Nop='$b25',Spp='$c25',Mo='$d25' where Param='$e25'";
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

// Form 6 Sponsered projects

if(isset($_POST["a26"]) || isset($_POST["b26"]) ||isset($_POST["c26"]) ||isset($_POST["d26"]) ||isset($_POST["e26"]) )
{
    $a26=$_POST["a26"];
    $b26=$_POST["b26"];
    $c26=$_POST["c26"];
    $d26=$_POST["d26"];
    $e26=$_POST["e26"];
   
    $sql="update sasipro set Top='$a26',Nop='$b26',Mpp='$c26',Mo='$d26' where Param='$e26'";
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


// Form 7 patents

if(isset($_POST["a27"]) || isset($_POST["b27"]) ||isset($_POST["c27"]) ||isset($_POST["d27"]) ||isset($_POST["e27"]) )
{
    $a27=$_POST["a27"];
    $b27=$_POST["b27"];
    $c27=$_POST["c27"];
    $d27=$_POST["d27"];
    $e27=$_POST["e27"];
   
    $sql="update patents set Top='$a27',Nop='$b27',Mpp='$c27',Mo='$d27' where Params='$e27'";
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


// Form 8 Guidance

if(isset($_POST["a28"]) || isset($_POST["b28"]) ||isset($_POST["c28"]) ||isset($_POST["d28"]) ||isset($_POST["e28"]) )
{
    $a28=$_POST["a28"];
    $b28=$_POST["b28"];
    $c28=$_POST["c28"];
    $d28=$_POST["d28"];
    $e28=$_POST["e28"];
    $f28=$_POST["f28"];
    $sql="update guidance set Top='$a28',Dan='$b28',Nog='$c28',Mpp='$d28',Mo='$e28' where Params='$f28'";
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