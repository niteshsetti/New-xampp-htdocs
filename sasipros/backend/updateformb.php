<?php
include '../backend/db.php';

// Form1  Teaching-Learning and Evaluation

if(isset($_POST["a4"]) || isset($_POST["b4"]) ||isset($_POST["c4"]) ||isset($_POST["d4"]) ||isset($_POST["e4"]) || isset($_POST["f4"]) || isset($_POST["g4"]) ||isset($_POST["h4"]) ||isset($_POST["i4"]) ||isset($_POST["j4"]) ||isset($_POST["k4"]))
{
    $a4=$_POST["a4"];
    $b4=$_POST["b4"];
    $c4=$_POST["c4"];
    $d4=$_POST["d4"];
    $e4=$_POST["e4"];
    $f4=$_POST["f4"];
    $g4=$_POST["g4"];
    $h4=$_POST["h4"];
    $i4=$_POST["i4"];
    $j4=$_POST["j4"];
    $k4=$_POST["k4"];
    
    $sql="update teachinglearningevaluation set CC='$a4',CN='$b4',Bran='$c4',Yea='$d4',Semi='$e4',
    Sec='$f4', Nosp='$g4',Nosd='$h4',Per='$i4',MS='$j4' where Param='$k4'";
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

//Form2  Attainment of Course outcomes ( to be filled in consultation with course co-ordinator & Professor Incharge-Academics)



if(isset($_POST["a5"]) || isset($_POST["b5"]) ||isset($_POST["c5"]) ||isset($_POST["d5"]) ||isset($_POST["e5"]) ||isset($_POST["f5"]) || isset($_POST["g5"]))
{
    $a5=$_POST["a5"];
    $b5=$_POST["b5"];
    $c5=$_POST["c5"];
    $d5=$_POST["d5"];
    $e5=$_POST["e5"];
    $f5=$_POST["f5"];
    $g5=$_POST["g5"];
    
    
    $sql="update atainment set cc='$a5',cn='$b5',eco='$c5',oa='$d5',per='$e5',
    mo='$f5' where Params='$g5'";
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


//Form3 Assessment and Evaluation related




if(isset($_POST["a6"]) || isset($_POST["b6"]) ||isset($_POST["c6"]) ||isset($_POST["d6"]))
{
    $a6=$_POST["a6"];
    $b6=$_POST["b6"];
    $c6=$_POST["c6"];
    $d6=$_POST["d6"];
    
    
   $sql="update aerelated set sya='$a6',cc='$b6',mo='$c6' where Params='$d6'";
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


//Form 4 Examination work such as



if(isset($_POST["a7"]) || isset($_POST["b7"]) ||isset($_POST["c7"]) )
{
    $a7=$_POST["a7"];
    $b7=$_POST["b7"];
    $c7=$_POST["c7"];
    
    
   $sql="update ewsuch set sya1='$a7',mo3='$b7' where Params='$c7'";
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

//Form 5  Use of Innovative Teaching - Learning Methodologies;ty

if(isset($_POST["a8"]) || isset($_POST["b8"]) ||isset($_POST["c8"]) )
{
    $a8=$_POST["a8"];
    $b8=$_POST["b8"];
    $c8=$_POST["c8"];
    
    
   $sql="update uiteach set sya2='$a8',mo4='$b8' where Params='$c8'";
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


//Form 6  Additional Contribution

if(isset($_POST["a9"]) || isset($_POST["b9"]) ||isset($_POST["c9"]) || isset($_POST["d9"]) )
{
    $a9=$_POST["a9"];
    $b9=$_POST["b9"];
    $c9=$_POST["c9"];
    $d9=$_POST["d9"];
    
    
   $sql="update addit set sya3='$a9',noht='$b9',mo5='$c9' where Params='$d9'";
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

//Form 7 Student Performance Monitoring


if(isset($_POST["a10"]) || isset($_POST["b10"]) ||isset($_POST["c10"]) || isset($_POST["d10"]) )
{
    $a10=$_POST["a10"];
    $b10=$_POST["b10"];
    $c10=$_POST["c10"];
    $d10=$_POST["d10"];
    
    
   $sql="update spmonitor set sya4='$a10',mm1='$b10',mo6='$c10' where Params='$d10'";
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


//Form 8  Student Feedback


if(isset($_POST["a11"]) || isset($_POST["b11"]) ||isset($_POST["c11"]) || isset($_POST["d11"]) )
{
    $a11=$_POST["a11"];
    $b11=$_POST["b11"];
    $c11=$_POST["c11"];
    $d11=$_POST["d11"];
    
    
   $sql="update sfeed set cc3='$a11',semis='$b11',pofa='$c11' where Params='$d11'";
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


//Form9 Student pass %

if(isset($_POST["a12"]) || isset($_POST["b12"]) ||isset($_POST["c12"]) || isset($_POST["d12"]) )
{
    $a12=$_POST["a12"];
    $b12=$_POST["b12"];
    $c12=$_POST["c12"];
    $d12=$_POST["d12"];
    
    
   $sql="update spass set cc4='$a12',semis1='$b12',pasp='$c12' where Params='$d12'";
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


//Form10 Contibution through

if(isset($_POST["a13"]) || isset($_POST["b13"]) ||isset($_POST["c13"]) || isset($_POST["d13"]) )
{
    $a13=$_POST["a13"];
    $b13=$_POST["b13"];
    $c13=$_POST["c13"];
    $d13=$_POST["d13"];
    
    
   $sql="update cthro set sya5='$a13',sya6='$b13',mo7='$c13' where Params='$d13'";
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

//Form11 Institutional Co-curricular activities for students such as



if(isset($_POST["a14"]) || isset($_POST["b14"]) ||isset($_POST["c14"]) || isset($_POST["d14"]) )
{
    $a14=$_POST["a14"];
    $b14=$_POST["b14"];
    $c14=$_POST["c14"];
    $d14=$_POST["d14"];
    
    
   $sql="update icactivities set sya7='$a14',sya8='$b14',mo8='$c14' where Params='$d14'";
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


// Form 12 Participation In
if(isset($_POST["a15"]) || isset($_POST["b15"]) ||isset($_POST["c15"]) || isset($_POST["d15"]) )
{
    $a15=$_POST["a15"];
    $b15=$_POST["b15"];
    $c15=$_POST["c15"];
    $d15=$_POST["d15"];
    
    
   $sql="update participat set sya9='$a15',sya10='$b15',mo9='$c15' where Params='$d15'";
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

// Form 13  Academic Assessment by the HOD

if(isset($_POST["a16"]) || isset($_POST["b16"]) ||isset($_POST["c16"]) || isset($_POST["d16"]) )
{
    $a16=$_POST["a16"];
    $b16=$_POST["b16"];
    $c16=$_POST["c16"];
    $d16=$_POST["d16"];
    
    
   $sql="update academic set sya11='$a16',sya12='$b16',mo10='$c16' where Params='$d16'";
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
