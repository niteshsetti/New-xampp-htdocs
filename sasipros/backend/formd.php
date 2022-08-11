<?php
include '../../backend/db.php';

/* ADMINISTRATION */

if(isset($_POST["dr1"]) || isset($_POST["dr2"]) || isset($_POST["mkso"]) )
{
   $a24=$_POST["dr1"];
   $b24=$_POST["dr2"];
   $c24=$_POST["mkso"];
   $sql24="insert into teachinglearningevaluation( )values('$a24','$b24','$c24')";
   $execute24=mysqli_query($connection,$sql24);
   if($execute24)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Institutional Governance responsibilities */


if(isset($_POST["dr3"]) || isset($_POST["dr4"]) || isset($_POST["mksc"]) )
{
   $a25=$_POST["dr3"];
   $b25=$_POST["dr4"];
   $c25=$_POST["mksc"];
   $sql25="insert into teachinglearningevaluation( )values('$a25','$b25','$c25')";
   $execute25=mysqli_query($connection,$sql25);
   if($execute25)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}
?>
