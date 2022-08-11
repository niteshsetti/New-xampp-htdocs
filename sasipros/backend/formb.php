<?php
include '../backend/db.php';
if (
    isset($_POST["cc"]) || isset($_POST["cn"]) || isset($_POST["branch"]) ||
    isset($_POST["year"]) || isset($_POST["sem"]) || isset($_POST["sec"]) || isset($_POST["nosd"])
    || isset($_POST["nosp"]) || isset($_POST["per"]) || isset($_POST["ms"]) || isset($_POST["sasiid4"])) {
    $a = $_POST["cc"];
    $b = $_POST["cn"];
    $c = $_POST["branch"];
    $d = $_POST["year"];
    $e = $_POST["sem"];
    $f = $_POST["sec"];
    $g = $_POST["nosd"];
    $h = $_POST["nosp"];
    $i = $_POST["per"];
    $j = $_POST["ms"];
    $k = $_POST["sasiid4"];
    $param = "tle".uniqid();

    $sql69 = "insert into teachinglearningevaluation(CC,CN,Bran,Yea,Semi,Sec,Nosp,Nosd,Per,MS,Sasiid,Param)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$param')";
    $execute = mysqli_query($connection, $sql69);
    if ($execute) {
        echo "Success";
    } else {
        echo "Failed";
    }
}

/* Attainment of Course outcomes ( to be filled in consultation with course co-ordinator & Professor Incharge-Academics)*/
if (isset($_POST["ccc"]) || isset($_POST["cnn"]) || isset($_POST["neoco"]) || isset($_POST["noc"]) || isset($_POST["pera"]) || isset($_POST["moo"]) || isset($_POST["sasiid5"])) {
    $a1 = $_POST["ccc"];
    $b1 = $_POST["cnn"];
    $c1 = $_POST["neoco"];
    $d1 = $_POST["noc"];
    $e1 = $_POST["pera"];
    $f1 = $_POST["moo"];
    $g1 = $_POST["sasiid5"];
    $param = "AOCO" . uniqid();
    $sql1 = "insert into atainment(cc,cn,eco,oa,per,mo,Sasiid,Params)values('$a1','$b1','$c1','$d1','$e1','$f1','$g1','$param')";
    $execute1 = mysqli_query($connection, $sql1);
    if ($execute1) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/* Assessment and Evaluation related */

if (isset($_POST["sya"]) || isset($_POST["cc2"]) || isset($_POST["mo2"]) || isset($_POST["sasiid6"])) {
    $a2 = $_POST["sya"];
    $b2 = $_POST["cc2"];
    $c2 = $_POST["mo2"];
    $d2 = $_POST["sasiid6"];
    $param = "AAER" . uniqid();
    $sql2 = "insert into aerelated(sya,cc,mo,Sasiid,Params)values('$a2','$b2','$c2','$d2','#param')";
    $execute2 = mysqli_query($connection, $sql2);
    if ($execute2) {
        echo "Success";
    } else {
        echo "Failed";
    }
}

/* Examination work such as */

if (isset($_POST["sya1"]) || isset($_POST["mo3"]) || isset($_POST["sasiid7"])) {
    $a3 = $_POST["sya1"];
    $b3 = $_POST["mo3"];
    $c3 = $_POST['sasiid7'];
    $params = "EW".uniqid();
    $sql3 = "insert into ewsuch(sya1,mo3,Sasiid,Params)values('$a3','$b3','$c3','$params')";
    $execute3 = mysqli_query($connection, $sql3);
    if ($execute3) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/*  Use of Innovative Teaching - Learning Methodologies; use of ICT; */

if (isset($_POST["sya2"]) || isset($_POST["mo4"]) || isset($_POST["sasiid8"])) {
    $a4 = $_POST["sya2"];
    $b4 = $_POST["mo4"];
    $c4 = $_POST['sasiid8'];
    $param = "IT" . uniqid();
    $sql4 = "insert into uiteach(sya2,mo4,Sasiid,Params)values('$a4','$b4','$c4','$param')";
    $execute4 = mysqli_query($connection, $sql4);
    if ($execute4) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/*  Additional Contribution */

if (isset($_POST["sya3"]) || isset($_POST["noht"]) || isset($_POST["mo5"]) || isset($_POST["sasiid9"])) {
    $a5 = $_POST["sya3"];
    $b5 = $_POST["noht"];
    $c90 = $_POST["mo5"];
    $d5 = $_POST['sasiid9'];
    $param = "AC" . uniqid();
    $sql5 = "insert into addit(sya3,noht,mo5,Sasiid,Params)values('$a5','$b5','$c90','$d5','$param')";
    $execute5 = mysqli_query($connection, $sql5);
    if ($execute5) {
        echo "Success";
    } else {
        echo "Failed";
    }
}


/*  Student Performance Monitoring */

if (isset($_POST["sya4"]) || isset($_POST["mm1"]) || isset($_POST["mo6"]) || isset($_POST["sasiid10"])) {
    $a6 = $_POST["sya4"];
    $b6 = $_POST["mm1"];
    $c6 = $_POST["mo6"];
    $d6 = $_POST['sasiid10'];
    $param = "SPM" . uniqid();
    $sql6 = "insert into spmonitor(sya4,mm1,mo6,Sasiid,Params)values('$a6','$b6','$c6','$d6','$param')";
    $execute6 = mysqli_query($connection, $sql6);
    if ($execute6) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/*  Student Feedback  */

if (isset($_POST["cc3"]) || isset($_POST["semis"]) || isset($_POST["pofa"]) || isset($_POST["sasiid11"])) {
    $a7 = $_POST["cc3"];
    $b7 = $_POST["semis"];
    $c7 = $_POST["pofa"];
    $d7 = $_POST['sasiid11'];
    $param = "SF" . uniqid();
    $sql7 = "insert into sfeed(cc3,semis,pofa,Sasiid,Params)values('$a7','$b7','$c7','$d7','$param')";
    $execute7 = mysqli_query($connection, $sql7);
    if ($execute7) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/* Student Pass % */

if (isset($_POST["cc4"]) || isset($_POST["semis1"]) || isset($_POST["pasp"]) || isset($_POST["sasiid12"])) {
    $a8 = $_POST["cc4"];
    $b8 = $_POST["semis1"];
    $c8 = $_POST["pasp"];
    $d8 = $_POST['sasiid12'];
    $param = "SPP" . uniqid();
    $sql8 = "insert into spass(cc4,semis1,pasp,Sasiid,Params)values('$a8','$b8','$c8','$d8','$param')";
    $execute8 = mysqli_query($connection, $sql8);
    if ($execute8) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/* Contribution Through */


if (isset($_POST["sya5"]) || isset($_POST["sya6"]) || isset($_POST["mo7"]) || isset($_POST["sasiid13"])) {
    $a9 = $_POST["sya5"];
    $b9 = $_POST["sya6"];
    $c9 = $_POST["mo7"];
    $d9 = $_POST['sasiid13'];
    $param = "CT" . uniqid();
    $sql9 = "insert into cthro(sya5,sya6,mo7,Sasiid,Params)values('$a9','$b9','$c9','$d9','$param')";
    $execute9 = mysqli_query($connection, $sql9);
    if ($execute9) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/* Institutional Co-curricular activities for students such as */


if (isset($_POST["sya7"]) || isset($_POST["sya8"]) || isset($_POST["mo8"]) || isset($_POST["sasiid14"])) {
    $a10 = $_POST["sya7"];
    $b10 = $_POST["sya8"];
    $c10 = $_POST["mo8"];
    $d10 = $_POST['sasiid14'];
    $param = "ICO" . uniqid();
    $sql10 = "insert into icactivities(sya7,sya8,mo8,Sasiid,Params)values('$a10','$b10','$c10','$d10','$param')";
    $execute10 = mysqli_query($connection, $sql10);
    if ($execute10) {
        echo "Success";
    } else {
        echo "Failed";
    }
}

/*  Participation in */

if (isset($_POST["sya9"]) || isset($_POST["sya10"]) || isset($_POST["mo9"]) || isset($_POST["sasiid15"])) {
    $a11 = $_POST["sya9"];
    $b11 = $_POST["sya10"];
    $c11 = $_POST["mo9"];
    $d11 = $_POST['sasiid15'];
    $param = "PI" . uniqid();
    $sql11 = "insert into participat(sya9,sya10,mo9,Sasiid,Params)values('$a11','$b11','$c11','$d11','$param')";
    $execute11 = mysqli_query($connection, $sql11);
    if ($execute11) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
/* Academic Assessment by the HOD */

if (isset($_POST["sya11"]) || isset($_POST["sya12"]) || isset($_POST["mo10"]) || isset($_POST["sasiid16"])) {
    $a12 = $_POST["sya11"];
    $b12 = $_POST["sya12"];
    $c12 = $_POST["mo10"];
    $d12 = $_POST['sasiid16'];
    $param = "AABH" . uniqid();
    $sql12 = "insert into academic(sya11,sya12,mo10,Sasiid,Params)values('$a12','$b12','$c12','$d12','$param')";
    $execute12 = mysqli_query($connection, $sql12);
    if ($execute12) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
