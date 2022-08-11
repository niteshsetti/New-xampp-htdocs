<?php

include '../../backend/db.php';

/* EXTENSION ACTIVITIES */


if(isset($_POST["snow1"]) || isset($_POST["drop1"]) || isset($_POST["drop2"])||
isset($_POST["sesa"]) ||isset($_POST["dta"]) || isset($_POST["noa8"]) || isset($_POST["poa"])
|| isset($_POST["hpd"]))
{
   $a26=$_POST["snow1"];
   $b26=$_POST["drop1"];
   $c26=$_POST["drop2"];
   $d26=$_POST["sesa"];
   $e26=$_POST["dta"];
   $f26=$_POST["noa8"];
   $g26=$_POST["poa"];
   $h26=$_POST["hpd"];
   

   $sql26="insert into teachinglearningevaluation( )values('$a26','$b26','$c26','$d26','$e26','$f26','$g26','$h26')";
   $execute26=mysqli_query($connection,$sql26);
   if($execute26)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/*  For Optional Extra 250 Marks:( for activities beyond the mention in Category A) */

if(isset($_POST["snow2"]) || isset($_POST["dro1"]) || isset($_POST["noeven"])||
isset($_POST["dro2"]) ||isset($_POST["sea1"]))
{
   $a27=$_POST["snow2"];
   $b27=$_POST["dro1"];
   $c27=$_POST["noeven"];
   $d27=$_POST["dro2"];
   $e27=$_POST["sea1"];
   
   $sql27="insert into teachinglearningevaluation( )values('$a27','$b27','$c27','$d27','$e27')";
   $execute27=mysqli_query($connection,$sql27);
   if($execute27)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Consolidated Marks of All Categories: */

if(isset($_POST["smtm"]) || isset($_POST["tesa"]) || isset($_POST["asoa"])||
isset($_POST["facs"]) || isset($_POST["sodh"]) || isset($_POST["sohod"]))
{
   $a28=$_POST["smtm"];
   $b28=$_POST["tesa"];
   $c28=$_POST["asoa"];
   $d28=$_POST["facs"];
   $e28=$_POST["sodh"];
   $f28=$_POST["sohod"];
   
   $sql28="insert into teachinglearningevaluation( )values('$a28','$b28','$c28','$d28','$e28',$f28)";
   $execute28=mysqli_query($connection,$sql28);
   if($execute28)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}
?>