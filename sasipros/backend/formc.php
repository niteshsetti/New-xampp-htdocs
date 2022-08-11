<?php
include '../backend/db.php';

/* RESEARCH AND ALLIED CONTRIBUTIONS (PROOFS TO BE ATTACHED ONLY FOR ASSESSMENT PERIOD) (DETAILS TO BE FILLED FROM 1-JAN-19 TO 31-DEC-19) */


if(isset($_POST["top"]) || isset($_POST["top1"]) || isset($_POST["numb"])||
isset($_POST["maob"]) || isset($_POST["sasiid1"]) )
{
   $a13=$_POST["top"];
   $b13=$_POST["top1"];
   $c13=$_POST["numb"];
   $d13=$_POST["maob"];
   $sasiid=$_POST["sasiid1"];
   $param="RAC".uniqid();
   $sql13="insert into raac(top,top1,numb,maob,Sasiid,Param)values('$a13','$b13','$c13','$d13','$sasiid','$param')";
   $execute13=mysqli_query($connection,$sql13);
   if($execute13)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Part B - For Optional Extra 250 Marks: (provide data other than mentioned in Part A) */

if(isset($_POST["a2"]) || isset($_POST["b2"]) || isset($_POST["c2"])||
isset($_POST["d2"]) || isset($_POST["sasiid2"]))
{
   $a14=$_POST["a2"];
   $b14=$_POST["b2"];
   $c14=$_POST["c2"];
   $d14=$_POST["d2"];
   $e14=$_POST["sasiid2"];
   $param="opem".uniqid();
   $sql14="insert into oextra(a2,b2,c2,d2,Sasiid,Param)values('$a14','$b14','$c14','$d14','$e14','$param')";
   $execute14=mysqli_query($connection,$sql14);
   if($execute14)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Impact factor is to be issued only by Thomson Reuters (Clarivate Analytics). */

if(isset($_POST["rpe"]) || isset($_POST["mfpe"]) || isset($_POST["mar2"]) || isset($_POST["sasiid3"]))
{
   $a15=$_POST["rpe"];
   $b15=$_POST["mfpe"];
   $c15=$_POST["mar2"];
   $sasiid=$_POST["sasiid3"];
   $param="IF".uniqid();
   $sql15="insert into ifactor(Rb,Marks,Marksob,Sasiid,Params)values('$a15','$b15','$c15','$sasiid','$param')";
   $execute15=mysqli_query($connection,$sql15);
   if($execute15)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* 
Book Publications (books, in chapters in books, other than referred journal articles)
*/

if(isset($_POST["topp1"]) || isset($_POST["np"]) || isset($_POST["mppo1"])||
isset($_POST["mar3"]) || isset($_POST["sasiid4"]) )
{
   $a16=$_POST["topp1"];
   $b16=$_POST["np"];
   $c16=$_POST["mppo1"];
   $d16=$_POST["mar3"];
   $sasiid=$_POST["sasiid4"];
   $param="BP".uniqid();
   $sql16="insert into Bookspub(Top,Nop,Mpp,Ma,Sasiid,Param)values('$a16','$b16','$c16','$d16','$sasiid','$param')";
   $execute16=mysqli_query($connection,$sql16);
   if($execute16)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Research Project - Sponsored Projects carried out/ ongoing */

if(isset($_POST["top2"]) || isset($_POST["nop2"]) || isset($_POST["top3"])||
isset($_POST["mar4"]) || isset($_POST["sasiid5"]))
{
   $a17=$_POST["top2"];
   $b17=$_POST["nop2"];
   $c17=$_POST["top3"];
   $d17=$_POST["mar4"];
   $sasiid=$_POST["sasiid5"];
   $param="RP".uniqid();
   $sql17="insert into Reapro(Top,Nop,Spp,Mo,Sasiid,Param)values('$a17','$b17','$c17','$d17','$sasiid','$param')";
   $execute17=mysqli_query($connection,$sql17);
   if($execute17)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}


/* Sponsored Projects */

if(isset($_POST["top4"]) || isset($_POST["nop3"]) || isset($_POST["mpp"])||
isset($_POST["mar5"])|| isset($_POST["sasiid6"]) )
{
   $a18=$_POST["top4"];
   $b18=$_POST["nop3"];
   $c18=$_POST["mpp"];
   $d18=$_POST["mar5"];
   $sasiid=$_POST["sasiid6"];
   $param="SP".uniqid();
   $sql18="insert into sasipro(Top,Nop,Mpp,Mo,Sasiid,Param)values('$a18','$b18','$c18','$d18','$sasiid','$param')";
   $execute18=mysqli_query($connection,$sql18);
   if($execute18)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/*  Patents */

if(isset($_POST["top5"]) || isset($_POST["nop4"]) || isset($_POST["mpp1"])||
isset($_POST["mar6"]) || isset($_POST["sasiid7"]))
{
   $a19=$_POST["top5"];
   $b19=$_POST["nop4"];
   $c19=$_POST["mpp1"];
   $d19=$_POST["mar6"];
   $sasiid=$_POST["sasiid7"];
   $param="Patents".uniqid();
   $sql19="insert into patents(Top,Nop,Mpp,Mo,Sasiid,Params)values('$a19','$b19','$c19','$d19','$sasiid','$param')";
   $execute19=mysqli_query($connection,$sql19);
   if($execute19)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Guidance */


if(isset($_POST["top6"]) || isset($_POST["dan"]) || isset($_POST["ng"])||
isset($_POST["mpp2"]) || isset($_POST["mar7"]) || isset($_POST["sasiid8"]))
{
   $a20=$_POST["top6"];
   $b20=$_POST["dan"];
   $c20=$_POST["ng"];
   $d20=$_POST["mpp2"];
   $e20=$_POST["mar7"];
   $sasiid=$_POST["sasiid8"];
   $param="Guidance".uniqid();
   $sql20="insert into guidance(Top,Dan,Nog,Mpp,Mo,Sasiid,Params)values('$a20','$b20','$c20','$d20','$e20','$sasiid','$param')";
   $execute20=mysqli_query($connection,$sql20);
   if($execute20)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Awards - Honors/ Recognitions */

if(isset($_POST["top77"]) || isset($_POST["noa17"]) || isset($_POST["top87"])||
isset($_POST["mar87"]) || isset($_POST["sasiid9"]))
{
   $a21=$_POST["top77"];
   $b21=$_POST["noa17"];
   $c21=$_POST["top87"];
   $d21=$_POST["mar87"];
   $sasiid=$_POST["sasiid9"];
   $param="AH".uniqid();
   $sql21="insert into awards(Toa,Noa,Mpa,Mo,Sasiid,params)values('$a21','$b21','$c21','$d21','$sasiid','$param')";
   $execute21=mysqli_query($connection,$sql21);
   if($execute21)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Post- Doctoral Degrees */

if(isset($_POST["a"]) || isset($_POST["b"]) || isset($_POST["c"]) || isset($_POST["sasiid10"]))
{
   $a22=$_POST["a"];
   $b22=$_POST["b"];
   $c22=$_POST["c"];
   $sasiid=$_POST["sasiid10"];
   $param="PD".uniqid();
   $sql19="insert into pdd(Toa,Mpa,Mo,Sasiid,Param)values('$a22','$b22','$c22','$sasiid','$param')";
   $execute22=mysqli_query($connection,$sql19);
   if($execute22)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

/* Other activities */

if(isset($_POST["a1"]) || isset($_POST["b1"]) || isset($_POST["c1"])||
isset($_POST["d1"]) || isset($_POST["sasiid11"]) )
{
   $a23=$_POST["a1"];
   $b23=$_POST["b1"];
   $c23=$_POST["c1"];
   $d23=$_POST["d1"];
   $sasiid=$_POST["sasiid11"];
   $param="OA".uniqid();
   $sql23="insert into otherAct(Details,Noa,Mm,Mo,Sasiid,Params)values('$a23','$b23','$c23','$d23','$sasiid','$param')";
   $execute23=mysqli_query($connection,$sql23);
   if($execute23)
   {
    echo "Success";
   }
   else{
       echo "Failed";
   }
}

?>