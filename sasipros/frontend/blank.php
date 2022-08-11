<?php
session_start();
include '../backend/dashcount.php';
include '../backend/db.php';
$email = $_SESSION["email"];
@$sasiid = $_SESSION["sasiid"];
@$name = $_SESSION["name"];
/*3 AOCO*/
$sql = "select *from raac where Sasiid='$sasiid'";
$fetch = mysqli_query($connection, $sql);
$count1 = 0;

/*4 Assessment and Evaluation*/
$sql1 = "select *from oextra where Sasiid='$sasiid'";
$fetch1 = mysqli_query($connection, $sql1);
$count2 = 0;

/*5 Examination work such as*/

$sql2 = "select *from ifactor where Sasiid='$sasiid'";
$fetch2 = mysqli_query($connection, $sql2);
$count3 = 0;

/*6 Use of Innovative Teaching - Learning Methodologies; use of ICT*/

$sql3 = "select *from bookspub where Sasiid='$sasiid'";
$fetch3 = mysqli_query($connection, $sql3);
$count4 = 0;

/*7 Additional Contribution*/

$sql4 = "select *from reapro where Sasiid='$sasiid'";
$fetch4 = mysqli_query($connection, $sql4);
$count5 = 0;

/*8 Student Performance Monitoring*/

$sql5 = "select *from sasipro where Sasiid='$sasiid'";
$fetch5 = mysqli_query($connection, $sql5);
$count6 = 0;

/*9 Student Feedback*/

$sql6 = "select *from patents where Sasiid='$sasiid'";
$fetch6 = mysqli_query($connection, $sql6);
$count7 = 0;
/*10 Student Pass % */

$sql7 = "select *from guidance where Sasiid='$sasiid'";
$fetch7 = mysqli_query($connection, $sql7);
$count8 = 0;

/*11 Contribution Through */

$sql8 = "select *from awards where Sasiid='$sasiid'";
$fetch8 = mysqli_query($connection, $sql8);
$count9 = 0;
/*12 Institutional Co-curricular activities for students such as */

$sql9 = "select *from pdd where Sasiid='$sasiid'";
$fetch9 = mysqli_query($connection, $sql9);
$count10 = 0;
/*13 Participation in*/

$sql10 = "select *from  otheract where Sasiid='$sasiid'";
$fetch10 = mysqli_query($connection, $sql10);
$count11 = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../middleware/formc.js"></script>
    <script src="../middleware/formcupdate.js"></script>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Employee</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->

            <!-- Heading -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="addimage">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add Image</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Apprisal Forms</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Form names:</h6>
                        <a class="collapse-item" href="404.php">Form-B</a>
                        <a class="collapse-item" href="blank.php">Form-C</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../../img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../../img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../../img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="../../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">RESEARCH AND ALLIED CONTRIBUTIONS (Proofs to be attached only for Assessment period)
                                        (Details to be filled from 1-Jan-19 to 31-Dec-19)
                                    </h4>

                                    <p class="card-description">
                                        Part A - For Compulsory Max Marks :150<br>
                                        Sl. No. 1 and 2 are mandatory and 3 to 5 are capped to 50 Marks
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Pashow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S. No</th>
                                                <th width="40%">Nature of Activity</th>
                                                <th>Marks</th>
                                                <th>Number</th>
                                                <th>Marks Obtained</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_array($fetch)) {
                                                $count1 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count1; ?></td>
                                                    <td><?php echo $row['top']; ?></td>
                                                    <td><?php echo $row['top1']; ?></td>
                                                    <td><?php echo $row['numb']; ?></td>
                                                    <td><?php echo $row['maob']; ?></td>
                                                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal18" onclick="raa('<?php echo $row['top']; ?>',
                                                    '<?php echo $row['top1']; ?>','<?php echo $row['numb']; ?>','<?php echo $row['maob']; ?>','<?php echo $row['Param']; ?>')">Edit</button></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Padiv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Nature of Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top">
                                                            <option selected hidden value="">Select your Activity </option>
                                                            <option value="Journal Publications- Scopus/WOS/IIM indexed Assistant Professor- 2, Associate Professor - 3, Professor - 4 (Max 80 and Proportionate) Ex: If Asst Prof Publish only one paper, eligible to get 40 Max)">Journal Publications- Scopus/WOS/IIM indexed Assistant Professor- 2, Associate Professor - 3, Professor - 4 (Max 80 and Proportionate) Ex: If Asst Prof Publish only one paper, eligible to get 40 Max)</option>
                                                            <option value="Citations in the assessing period- 5 per citation">Citations in the assessing period- 5 per citation</option>
                                                            <option value="Organising Research related course / Workshops/ National / International Conference / Symposiums">Organising Research related course / Workshops/ National / International Conference / Symposiums</option>
                                                            <option value="Papers Presented / Participated in International conference">Papers Presented / Participated in International conference</option>
                                                            <option value="Papers Presented / Participated in National Level conference.">Papers Presented / Participated in National Level conference.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top1">
                                                            <option selected hidden value="">Select Marks</option>
                                                            <option value="80(MAX)">80(MAX)</option>
                                                            <option value="20(MAX)">20(MAX)</option>
                                                            <option value="10 per activity">10 per activity</option>
                                                            <option value="10 per paper">10 per paper</option>
                                                            <option value="5 per activit">5 per activity</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="numb" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="maob" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid1">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formc1()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <p class="card-description">
                                    Part B - For Optional Extra 250 Marks:
                                    (provide data other than mentioned in Part A)
                                <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Opshow">Add</a></p>

                                </p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th width="60%">
                                                <center>Nature of Activity</center>
                                            </th>
                                            <th rowspan="2">No. of papers Published</th>
                                            <th rowspan="2">Max Score per Publications</th>
                                            <th rowspan="2">Marks Obtained</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>
                                                <center>Research Publications (Journals)</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row1 = mysqli_fetch_array($fetch1)) {
                                            $count2 += 1;
                                        ?>
                                            <tr>
                                                <td><?php echo $count2; ?></td>
                                                <td><?php echo $row1['a2']; ?></td>
                                                <td><?php echo $row1['b2']; ?></td>
                                                <td><?php echo $row1['c2']; ?></td>
                                                <td><?php echo $row1['d2']; ?></td>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal19" onclick="oex('<?php echo $row1['a2']; ?>',
                                                '<?php echo $row1['b2']; ?>','<?php echo $row1['c2']; ?>','<?php echo $row1['d2']; ?>','<?php echo $row1['Param']; ?>')">Edit</button></td>
                                                <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div id="Opdiv">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nature of Activity Research Publications (Journals)</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="a2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No. of papers Published</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="b2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Max Score per Publications</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="c2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="d2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid2">
                                                <button style="color:white;" class="btn btn-primary" onclick="formc2()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <small style="font-size: 10px;">Single Author---100% weightage, Two Authors-First Author-60% and Second Author-40% weightage
                                    Three Authors-First Author-50%,Second Author-30%,Third Author-20% weightage
                                    Four Authors – First Author – 50%, Second Author – 30%, Third Author – 10%, Fourth Author – 10%
                                    Marks obtained = Number of papers published * Score per paper.
                                </small>
                                <br>
                                <hr>
                                <p class="card-description">
                                    Impact factor is to be issued only by Thomson Reuters (Clarivate Analytics).
                                </p>
                                <p class="card-description">
                                    Citation Index
                                <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Cishow">Add</a></p>
                                </p>
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>Sno</th>
                                            <th>Research Publications (Journals)</th>
                                            <th>Marks</th>
                                            <th>Marks Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row2 = mysqli_fetch_array($fetch2)) {
                                            $count3 += 1;
                                        ?>
                                            <tr>
                                                <td><?php echo $count3; ?></td>
                                                <td><?php echo $row2['Rb']; ?></td>
                                                <td><?php echo $row2['Marks']; ?></td>
                                                <td><?php echo $row2['Marksob']; ?></td>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal20" onclick="ifit('<?php echo $row2['Rb']; ?>',
                                                '<?php echo $row2['Marks']; ?>','<?php echo $row2['Marksob']; ?>','<?php echo $row2['Params']; ?>')">Edit</button></td>
                                                <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div id="Cidiv">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Research Publications (Journals) No. of citations in the assessing period h- index i10 index</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="rpj" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Marks 5 per each cross citation - upto Max. 150 marks 5 per each i10 index value</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="mfpe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="mar2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid3">
                                                <button style="color: white;" class="btn btn-primary" onclick="formc3()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <p class="card-description">
                                    Book Publications (books, in chapters in books, other than referred journal articles)
                                <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Boshow">Add</a></p>
                                </p>
                                <table class="table">
                                    <thead>
                                        <th>Sno</th>
                                        <th width="50%">Type of Publications</th>
                                        <th>No. Published</th>
                                        <th>Marks per Publication</th>
                                        <th>Marks Achieved</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row3 = mysqli_fetch_array($fetch3)) {
                                            $count4 += 1;
                                        ?>
                                            <tr>
                                                <td><?php echo $count4; ?></td>
                                                <td><?php echo $row3['Top']; ?></td>
                                                <td><?php echo $row3['Nop']; ?></td>
                                                <td><?php echo $row3['Mpp']; ?></td>
                                                <td><?php echo $row3['Ma']; ?></td>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal21" onclick="bop('<?php echo $row3['Top']; ?>',
                                                '<?php echo $row3['Nop']; ?>','<?php echo $row3['Mpp']; ?>','<?php echo $row3['Ma']; ?>','<?php echo $row3['Param']; ?>')">Edit</button></td>
                                                <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div id="Bodiv">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Type of Publications</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" id="topp1">
                                                        <option selected hidden value="">Select Type of Publications </option>
                                                        <option value="Text or reference Books Published by International Publishers with an established peer review system">Text or reference Books Published by International Publishers with an established peer review system</option>
                                                        <option value="Chapters in edited books Published by International Publishers with an established peer review system">Chapters in edited books Published by International Publishers with an established peer review system</option>
                                                        <option value="Subjects Books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers">Subjects Books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers</option>
                                                        <option value="Chapters in edited books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers">Chapters in edited books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No. Published</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="np" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Marks per Publication</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" id="mppo1">
                                                        <option selected hidden value="">Select Marks</option>
                                                        <option value="50">50</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Marks Acheived</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="mar3" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid4">
                                                <button style="color: white;" class="btn btn-primary" onclick="formc4()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <p class="card-description">
                                    Research Project - Sponsored Projects carried out/ ongoing
                                <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Reshow">Add</a></p>
                                </p>
                                <table class="table">
                                    <thead>
                                        <th>Sno</th>
                                        <th width="50%">Type of Project</th>
                                        <th>No of Project</th>
                                        <th>Score per Project</th>
                                        <th>Mark Obtained</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row4 = mysqli_fetch_array($fetch4)) {
                                            $count5 += 1;
                                        ?>
                                            <tr>
                                                <td><?php echo $count5; ?></td>
                                                <td><?php echo $row4['Top']; ?></td>
                                                <td><?php echo $row4['Nop']; ?></td>
                                                <td><?php echo $row4['Spp']; ?></td>
                                                <td><?php echo $row4['Mo']; ?></td>
                                                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal22" onclick="repo('<?php echo $row4['Top']; ?>',
                                                '<?php echo $row4['Nop']; ?>','<?php echo $row4['Spp']; ?>','<?php echo $row4['Mo']; ?>','<?php echo $row4['Param']; ?>')">Edit</button></td>
                                                <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div id="Rediv">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Type of Project</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" id="top2">
                                                        <option selected hidden value="">Type of Project </option>
                                                        <option value="Major Projects amount mobilized with grants above Rupees 1 crore in India & abroad">Major Projects amount mobilized with grants above Rupees 1 crore in India & abroad</option>
                                                        <option value="Major Projects amount mobilized with grants above Rupees 30.00 lakhs up to 1 crore in India & abroad">Major Projects amount mobilized with grants above Rupees 30.00 lakhs up to 1 crore in India & abroad</option>
                                                        <option value=">Major Projects amount mobilized with grants above Rupees 5.0 lakhs up to 30.00 lakhs in India & abroad">Major Projects amount mobilized with grants above Rupees 5.0 lakhs up to 30.00 lakhs in India & abroad</option>
                                                        <option value="Minor Projects from central / state funding agencies with grants below Rs.5.00 lakhs in India & abroad">Minor Projects from central / state funding agencies with grants below Rs.5.00 lakhs in India & abroad</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No of Project</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nop2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Score per Project</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" id="top3">
                                                        <option selected hidden value="">Select score per Project </option>
                                                        <option value="50">50</option>
                                                        <option value="35">35</option>
                                                        <option value="25">25</option>
                                                        <option value="20">20</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Marks Acheived</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="mar4" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid5">
                                                <button style="color: white;" class="btn btn-primary" onclick="formc5()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <p class="card-description">
                                        Sponsored Projects
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Spshow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <th>S.no</th>
                                            <th width="50%">Type of project</th>
                                            <th>No. Of Projects</th>
                                            <th>Marks per Project</th>
                                            <th>Mark Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row5 = mysqli_fetch_array($fetch5)) {
                                                $count6 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count6; ?></td>
                                                    <td><?php echo $row5['Top']; ?></td>
                                                    <td><?php echo $row5['Nop']; ?></td>
                                                    <td><?php echo $row5['Mpp']; ?></td>
                                                    <td><?php echo $row5['Mo']; ?></td>
                                                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal23" onclick="spo('<?php echo $row5['Top']; ?>',
                                                    '<?php echo $row5['Nop']; ?>','<?php echo $row5['Mpp']; ?>','<?php echo $row5['Mo']; ?>','<?php echo $row5['Param']; ?>')">Edit</button></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Spdiv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type of Project</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top4">
                                                            <option selected hidden value="">Selct Type of Project </option>
                                                            <option value="Major projects completed project Reports (Acceptance from funding agency ) beyond 5 lakhs">Major projects completed project Reports (Acceptance from funding agency ) beyond 5 lakhs</option>
                                                            <option value="Minor projects completed project Reports (Acceptance from funding agency ) below 5 lakhs">Minor projects completed project Reports (Acceptance from funding agency ) below 5 lakhs</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">No. Of Projects</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nop3" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks per Project</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="mpp">
                                                            <option selected hidden value="">Select Marks per project</option>
                                                            <option value="40">40</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mark Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mar5" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid6">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formc6()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <p class="card-description">
                                        Patents
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Peshow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <th>Sno</th>
                                            <th width="50%">Type of Patents</th>
                                            <th>No. Of Patents</th>
                                            <th>Marks per Patents</th>
                                            <th>Mark Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row6 = mysqli_fetch_array($fetch6)) {
                                                $count7 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count7; ?></td>
                                                    <td><?php echo $row6['Top']; ?></td>
                                                    <td><?php echo $row6['Nop']; ?></td>
                                                    <td><?php echo $row6['Mpp']; ?></td>
                                                    <td><?php echo $row6['Mo']; ?></td>
                                                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal24" onclick="pat('<?php echo $row6['Top']; ?>',
                                                '<?php echo $row6['Nop']; ?>','<?php echo $row6['Mpp']; ?>','<?php echo $row6['Mo']; ?>','<?php echo $row6['Params']; ?>')">Edit</button></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Pediv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type of Patents</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top5">
                                                            <option selected hidden value="">Select type of patents</option>
                                                            <option value="No. of patents filed/published">No. of patents filed/published</option>
                                                            <option value="National Patent/Technology transfer / Product/ Process (Granted)">National Patent/Technology transfer / Product/ Process (Granted)</option>
                                                            <option value="International Patent/Technology transfer / Product/ Process (Granted)">International Patent/Technology transfer / Product/ Process (Granted)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> No. Of Patents</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="nop4" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks per Patents</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="mpp1">
                                                            <option selected hidden value="">Select Marks Per Patents</option>
                                                            <option value="40">40</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mark Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mar6" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid7">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formc7()" id="hide">Insert</button>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <p class="card-description">
                                        Guidance
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Gushow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <th>Sno</th>
                                            <th width="50%" colspan="2">Type of Project</th>

                                            <th>No. Guided</th>
                                            <th>Marks per Project</th>
                                            <th>Mark Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row7 = mysqli_fetch_array($fetch7)) {
                                                $count8 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count8; ?></td>
                                                    <td><?php echo $row7['Top']; ?></td>
                                                    <td><?php echo $row7['Dan']; ?></td>
                                                    <td><?php echo $row7['Nog']; ?></td>
                                                    <td><?php echo $row7['Mpp']; ?></td>
                                                    <td><?php echo $row7['Mo']; ?></td>
                                                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal25" onclick="gud('<?php echo $row7['Top']; ?>',
                                                    '<?php echo $row7['Dan']; ?>','<?php echo $row7['Nog']; ?>','<?php echo $row7['Mpp']; ?>','<?php echo $row7['Mo']; ?>','<?php echo $row7['Params']; ?>')">Edit</button></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Gudiv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type of Project</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top6">
                                                            <option selected hidden value="">Select type of project</option>
                                                            <option value="Ph.D Doctoral Projects">Ph.D Doctoral Projects</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Degree awarded No.</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="dan" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">No. Guided</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="ng" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks per Project</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mpp2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mark Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mar7" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid8">
                                                <button style="color: white;" class="btn btn-primary" onclick="formc8()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <p class="card-description">
                                        Awards - Honors/ Recognitions
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Awshow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <th>Sno</th>
                                            <th width="50%">Type of awards</th>
                                            <th>No. of awards</th>
                                            <th>Marks per award</th>
                                            <th>Mark Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row8 = mysqli_fetch_array($fetch8)) {
                                                $count9 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count9; ?></td>
                                                    <td><?php echo $row8['Toa']; ?></td>
                                                    <td><?php echo $row8['Noa']; ?></td>
                                                    <td><?php echo $row8['Mpa']; ?></td>
                                                    <td><?php echo $row8['Mo']; ?></td>
                                                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal26" onclick="awar('<?php echo $row8['Toa']; ?>',
                                                    '<?php echo $row7['Noa']; ?>','<?php echo $row7['Mpa']; ?>','<?php echo $row7['Mo']; ?>','<?php echo $row7['Params']; ?>')">Edit</button></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Awdiv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type of awards</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top77">
                                                            <option selected hidden value="">Select type of awards</option>
                                                            <option value="Awards by Foreign universities / Accredited International Bodies (approved by NBA/NAAC/AICTE..etc)">Awards by Foreign universities / Accredited International Bodies (approved by NBA/NAAC/AICTE..etc)</option>
                                                            <option value="National: by UGC, CSIR, DST & other Government bodies and professional Academies like Bhatnagar Award etc., .">National: by UGC, CSIR, DST & other Government bodies and professional Academies like Bhatnagar Award etc., .</option>
                                                            <option value="State/university level.(approved by NBA/NAAC/AICTE..etc)">State/university level.(approved by NBA/NAAC/AICTE..etc)</option>
                                                            <option value="Regional / local.(approved by NBA/NAAC/AICTE..etc)">Regional / local.(approved by NBA/NAAC/AICTE..etc)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">No. of awards</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="noa17" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks per award</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="top87">
                                                            <option selected hidden value="">Select marks per award</option>
                                                            <option value="20">20</option>
                                                            <option value="15">15</option>
                                                            <option value="10">10</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mar87" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid97">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formc9()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <p class="card-description">
                                        Post- Doctoral Degrees
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Poshow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <th>Sno</th>
                                            <th width="50%">Type of Achievement</th>
                                            <th>Marks per Achievement</th>
                                            <th>Mark Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>

                                            <?php
                                            while ($row9 = mysqli_fetch_array($fetch9)) {
                                                $count10 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count10; ?></td>
                                                    <td><?php echo $row9['Toa']; ?></td>
                                                    <td><?php echo $row9['Mpa']; ?></td>
                                                    <td><?php echo $row9['Mo']; ?></td>
                                                    <td><a class="btn btn-warning" href="empprofile/updatetemps?paramterconfigauth=<?php echo $quan_param; ?>">Edit</a></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Podiv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Type of Achievement</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="a">
                                                            <option selected hidden value="">Select Type of Achievement</option>
                                                            <option value="Ph.D">Ph.D</option>
                                                            <option value="D.Sc/PDF">D.Sc/PDF</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks per Achievement</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="b">
                                                            <option selected hidden value="">Select marks per acheivement</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Mark Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="c" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid10">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formc10()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <p class="card-description">
                                        Other activities
                                    <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Otshow">Add</a></p>
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <th>Sno</th>
                                            <th width="50%">Details</th>
                                            <th>No. Activities</th>
                                            <th>Max Marks</th>
                                            <th>Marks Obtained</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row10 = mysqli_fetch_array($fetch10)) {
                                                $count11 += 1;
                                            ?>
                                                <tr>
                                                    <td><?php echo $count11; ?></td>
                                                    <td><?php echo $row10['Details']; ?></td>
                                                    <td><?php echo $row10['Noa']; ?></td>
                                                    <td><?php echo $row10['Mm']; ?></td>
                                                    <td><?php echo $row10['Mo']; ?></td>
                                                    <td><a class="btn btn-warning" href="empprofile/updatetemps?paramterconfigauth=<?php echo $quan_param; ?>">Edit</a></td>
                                                    <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div id="Otdiv">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Other Activities</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="a1">
                                                            <option selected hidden value="">Select your activity</option>
                                                            <option value="Guest lectures delivered - national/international national">Guest lectures delivered - national/international national</option>
                                                            <option value="Collaborations - Foreign Universities/IITs/NITs/Others">Collaborations - Foreign Universities/IITs/NITs/Others</option>
                                                            <option value="Innovation & Incubation - startups regd">Innovation & Incubation - startups regd</option>
                                                            <option value="Innovation & Incubation - applied for funding">Innovation & Incubation - applied for funding</option>
                                                            <option value="Innovation & Incubation - prototype ready">Innovation & Incubation - prototype ready</option>
                                                            <option value="Innovation & Incubation - scale up activities">Innovation & Incubation - scale up activities</option>
                                                            <option value="Corporate training">Corporate training</option>
                                                            <option value="Research community connect-Orcid/Publons/Google/RG/Microsoft">Research community connect-Orcid/Publons/Google/RG/Microsoft</option>
                                                            <option value="Membership in professional bodies">Membership in professional bodies</option>
                                                            <option value="Outreach/ extension programs with Industry/NGO/others">Outreach/ extension programs with Industry/NGO/others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">No. Activities</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="b1" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Max Marks</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="c1">
                                                            <option selected hidden value="">Enter Max Marks</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="d1" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid11">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formc11()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div>

                        <!-- Pie Chart -->
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->


                        <!-- Color System -->


                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->


                            <!-- Approach -->


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script>
        $(document).ready(function() {

            $("#Seshow").click(function() {
                $("#Sediv").toggle();
            });
            $("#Otshow").click(function() {
                $("#Otdiv").toggle();
            });
            $("#Atshow").click(function() {
                $("#Atdiv").toggle();
            });
            $("#Asshow").click(function() {
                $("#Asdiv").toggle();
            });
            $("#Exshow").click(function() {
                $("#Exdiv").toggle();
            });
            $("#Usshow").click(function() {
                $("#Usdiv").toggle();
            });
            $("#Adshow").click(function() {
                $("#Addiv").toggle();
            });
            $("#Stshow").click(function() {
                $("#Stdiv").toggle();
            });
            $("#Feshow").click(function() {
                $("#Fediv").toggle();
            });
            $("#Pashow").click(function() {
                $("#Padiv").toggle();
            });
            $("#Coshow").click(function() {
                $("#Codiv").toggle();
            });
            $("#Inshow").click(function() {
                $("#Indiv").toggle();
            });
            $("#Ipshow").click(function() {
                $("#Ipdiv").toggle();
            });
            $("#Acshow").click(function() {
                $("#Acdiv").toggle();
            });
        });
    </script>
    <script>
        function allhide() {


            document.getElementById('Sediv').style.display = "none";
            document.getElementById('Otdiv').style.display = "none";

            document.getElementById('Atdiv').style.display = "none";
            document.getElementById('Asdiv').style.display = "none";
            document.getElementById('Exdiv').style.display = "none";
            document.getElementById('Usdiv').style.display = "none";
            document.getElementById('Addiv').style.display = "none";
            document.getElementById('Stdiv').style.display = "none";
            document.getElementById('Fediv').style.display = "none";
            document.getElementById('Padiv').style.display = "none";
            document.getElementById('Codiv').style.display = "none";
            document.getElementById('Indiv').style.display = "none";
            document.getElementById('Ipdiv').style.display = "none";
            document.getElementById('Acdiv').style.display = "none";

        }
    </script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="../middleware/dashcount.js"></script>






    <!-- Update  RAAC  -->
    <div class="modal fade" id="exampleModal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Activity</label>
                            <select class="form-control form-control-sm" id="a222">
                                <option selected hidden value="">Select your Activity </option>
                                <option value="Journal Publications- Scopus/WOS/IIM indexed Assistant Professor- 2, Associate Professor - 3, Professor - 4 (Max 80 and Proportionate) Ex: If Asst Prof Publish only one paper, eligible to get 40 Max)">Journal Publications- Scopus/WOS/IIM indexed Assistant Professor- 2, Associate Professor - 3, Professor - 4 (Max 80 and Proportionate) Ex: If Asst Prof Publish only one paper, eligible to get 40 Max)</option>
                                <option value="Citations in the assessing period- 5 per citation">Citations in the assessing period- 5 per citation</option>
                                <option value="Organising Research related course / Workshops/ National / International Conference / Symposiums">Organising Research related course / Workshops/ National / International Conference / Symposiums</option>
                                <option value="Papers Presented / Participated in International conference">Papers Presented / Participated in International conference</option>
                                <option value="Papers Presented / Participated in National Level conference.">Papers Presented / Participated in National Level conference.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks</label>
                            <select class="form-control form-control-sm" id="b22">
                                <option selected hidden value="">Select Marks</option>
                                <option value="80(MAX)">80(MAX)</option>
                                <option value="20(MAX)">20(MAX)</option>
                                <option value="10 per activity">10 per activity</option>
                                <option value="10 per paper">10 per paper</option>
                                <option value="5 per activit">5 per activity</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Number</label>
                            <input type="text" class="form-control" id="c22">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="d22">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="e22">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc1">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update  Part B - For Optional Extra 250 Marks: (provide data other than mentioned in Part A)  -->
    <div class="modal fade" id="exampleModal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nature of Activity Research Publications (Journals)</label>
                            <input type="text" class="form-control" id="a10">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. of papers Published</label>
                            <input type="text" class="form-control" id="b10">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Max Score per Publications</label>
                            <input type="text" class="form-control" id="c10">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="d10">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="e10">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc2">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update  Impact factor is to be issued only by Thomson Reuters (Clarivate Analytics).  -->
    <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Research Publications (Journals)</label>
                            <input type="text" class="form-control" id="a23">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks</label>
                            <input type="text" class="form-control" id="b23">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c23">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d23">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc3">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update  Impact factor is to be issued only by Thomson Reuters (Clarivate Analytics).  -->
    <div class="modal fade" id="exampleModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type of Publications</label>
                            <select class="form-control form-control-sm" id="a24">
                                <option selected hidden value="">Select Type of Publications </option>
                                <option value="Text or reference Books Published by International Publishers with an established peer review system">Text or reference Books Published by International Publishers with an established peer review system</option>
                                <option value="Chapters in edited books Published by International Publishers with an established peer review system">Chapters in edited books Published by International Publishers with an established peer review system</option>
                                <option value="Subjects Books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers">Subjects Books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers</option>
                                <option value="Chapters in edited books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers">Chapters in edited books by National level publishers /State and Central Govt. level with ISBN/ISSN numbers</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. Published</label>
                            <input type="text" class="form-control" id="b24">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks per Publication</label>
                            <select class="form-control form-control-sm" id="c24">
                                <option selected hidden value="">Select Marks</option>
                                <option value="50">50</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Achieved</label>
                            <input type="text" class="form-control" id="d24">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="e24">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc4">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update  Research Project - Sponsored Projects carried out/ ongoing  -->
    <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type of Publications</label>
                            <select class="form-control form-control-sm" id="a25">
                                <option selected hidden value="">Type of Project </option>
                                <option value="Major Projects amount mobilized with grants above Rupees 1 crore in India & abroad">Major Projects amount mobilized with grants above Rupees 1 crore in India & abroad</option>
                                <option value="Major Projects amount mobilized with grants above Rupees 30.00 lakhs up to 1 crore in India & abroad">Major Projects amount mobilized with grants above Rupees 30.00 lakhs up to 1 crore in India & abroad</option>
                                <option value=">Major Projects amount mobilized with grants above Rupees 5.0 lakhs up to 30.00 lakhs in India & abroad">Major Projects amount mobilized with grants above Rupees 5.0 lakhs up to 30.00 lakhs in India & abroad</option>
                                <option value="Minor Projects from central / state funding agencies with grants below Rs.5.00 lakhs in India & abroad">Minor Projects from central / state funding agencies with grants below Rs.5.00 lakhs in India & abroad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No of Project</label>
                            <input type="text" class="form-control" id="b25">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Score per Project</label>
                            <select class="form-control form-control-sm" id="c25">
                                <option selected hidden value="">Select score per Project </option>
                                <option value="50">50</option>
                                <option value="35">35</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mark Obtained</label>
                            <input type="text" class="form-control" id="d25">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="e25">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc5">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update Sponsored Projects -->
    <div class="modal fade" id="exampleModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type of projects</label>
                            <select class="form-control form-control-sm" id="a26">
                                <option selected hidden value="">Selct Type of Project </option>
                                <option value="Major projects completed project Reports (Acceptance from funding agency ) beyond 5 lakhs">Major projects completed project Reports (Acceptance from funding agency ) beyond 5 lakhs</option>
                                <option value="Minor projects completed project Reports (Acceptance from funding agency ) below 5 lakhs">Minor projects completed project Reports (Acceptance from funding agency ) below 5 lakhs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No of Projects</label>
                            <input type="text" class="form-control" id="b26">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks per Project</label>
                            <select class="form-control form-control-sm" id="c26">
                                <option selected hidden value="">Select Marks per project</option>
                                <option value="40">40</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mark Obtained</label>
                            <input type="text" class="form-control" id="d26">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="e26">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc6">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update Patents -->
    <div class="modal fade" id="exampleModal24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type of projects</label>
                            <select class="form-control form-control-sm" id="a27">
                                <option selected hidden value="">Select type of patents</option>
                                <option value="No. of patents filed/published">No. of patents filed/published</option>
                                <option value="National Patent/Technology transfer / Product/ Process (Granted)">National Patent/Technology transfer / Product/ Process (Granted)</option>
                                <option value="International Patent/Technology transfer / Product/ Process (Granted)">International Patent/Technology transfer / Product/ Process (Granted)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. Of Patents</label>
                            <input type="text" class="form-control" id="b27">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks per Patents</label>
                            <select class="form-control form-control-sm" id="c27">
                                <option selected hidden value="">Select Marks per project</option>
                                <option value="40">40</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mark Obtained</label>
                            <input type="text" class="form-control" id="d27">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="e27">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc7">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update Guidance -->
    <div class="modal fade" id="exampleModal25" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type of projects</label>
                            <select class="form-control form-control-sm" id="a28">
                                <option selected hidden value="">Select type of projects</option>
                                <option value="Ph.D Doctoral Projects">Ph.D Doctoral Projects</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Degree awarded No.</label>
                            <input type="text" class="form-control" id="b28">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. Guided</label>
                            <input type="text" class="form-control" id="c28">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks per Project</label>
                            <input type="text" class="form-control" id="d28">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mark Obtained</label>
                            <input type="text" class="form-control" id="e28">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="f28">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc8">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Awards - Honors/ Recognitions -->
    <div class="modal fade" id="exampleModal25" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type of awards</label>
                            <select class="form-control form-control-sm" id="top77">
                                <option selected hidden value="">Select type of awards</option>
                                <option value="Awards by Foreign universities / Accredited International Bodies (approved by NBA/NAAC/AICTE..etc)">Awards by Foreign universities / Accredited International Bodies (approved by NBA/NAAC/AICTE..etc)</option>
                                <option value="National: by UGC, CSIR, DST & other Government bodies and professional Academies like Bhatnagar Award etc., .">National: by UGC, CSIR, DST & other Government bodies and professional Academies like Bhatnagar Award etc., .</option>
                                <option value="State/university level.(approved by NBA/NAAC/AICTE..etc)">State/university level.(approved by NBA/NAAC/AICTE..etc)</option>
                                <option value="Regional / local.(approved by NBA/NAAC/AICTE..etc)">Regional / local.(approved by NBA/NAAC/AICTE..etc)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. of awards</label>
                            <input type="text" class="form-control" id="b28">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks per award</label>

                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mark Obtained</label>
                            <input type="text" class="form-control" id="e28">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="f28">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformc8">Update</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>