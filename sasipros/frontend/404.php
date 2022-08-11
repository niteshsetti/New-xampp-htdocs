<?php
session_start();
include '../backend/dashcount.php';
include '../backend/db.php';
$email = $_SESSION["email"];
@$sasiid = $_SESSION["sasiid"];
@$name = $_SESSION["name"];
/* Teaching-Learning and Evaluation*/
$sql69 = "select *from teachinglearningevaluation where Sasiid='$sasiid'";
$fetch69 = mysqli_query($connection, $sql69);
$count = 0;

/*3 AOCO*/
$sql = "select *from atainment where Sasiid='$sasiid'";
$fetch = mysqli_query($connection, $sql);
$count1 = 0;

/*4 Assessment and Evaluation*/
$sql1 = "select *from aerelated where Sasiid='$sasiid'";
$fetch1 = mysqli_query($connection, $sql1);
$count2 = 0;

/*5 Examination work such as*/

$sql2 = "select *from ewsuch where Sasiid='$sasiid'";
$fetch2 = mysqli_query($connection, $sql2);
$count3 = 0;

/*6 Use of Innovative Teaching - Learning Methodologies; use of ICT*/

$sql3 = "select *from uiteach where Sasiid='$sasiid'";
$fetch3 = mysqli_query($connection, $sql3);
$count4 = 0;

/*7 Additional Contribution*/

$sql4 = "select *from addit where Sasiid='$sasiid'";
$fetch4 = mysqli_query($connection, $sql4);
$count5 = 0;

/*8 Student Performance Monitoring*/

$sql5 = "select *from spmonitor where Sasiid='$sasiid'";
$fetch5 = mysqli_query($connection, $sql5);
$count6 = 0;

/*9 Student Feedback*/

$sql6 = "select *from sfeed where Sasiid='$sasiid'";
$fetch6 = mysqli_query($connection, $sql6);
$count7 = 0;
/*10 Student Pass % */

$sql7 = "select *from spass where Sasiid='$sasiid'";
$fetch7 = mysqli_query($connection, $sql7);
$count8 = 0;

/*11 Contribution Through */

$sql8 = "select *from cthro where Sasiid='$sasiid'";
$fetch8 = mysqli_query($connection, $sql8);
$count9 = 0;
/*12 Institutional Co-curricular activities for students such as */

$sql9 = "select *from icactivities where Sasiid='$sasiid'";
$fetch9 = mysqli_query($connection, $sql9);
$count10 = 0;
/*13 Participation in*/

$sql10 = "select *from  participat where Sasiid='$sasiid'";
$fetch10 = mysqli_query($connection, $sql10);
$count11 = 0;

/*14 Academic Assessment by the HOD*/

$sql11 = "select *from academic where Sasiid='$sasiid'";
$fetch11 = mysqli_query($connection, $sql11);
$count12 = 0;
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
    <script src="../middleware/formb.js"></script>
    <script src="../middleware/formbupdate.js"></script>

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
                                    <h4 class="card-title">Teaching-Learning and Evaluation</h4>

                                    <p class="card-description">
                                        (Details to be filled from 1-Jul-19 to 30-Jun-20)
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <th>
                                                        <small style="font-size: 10px;">Sessions delivered against the
                                                            sessions planned(in %)
                                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Seshow">Add</a>
                                                            </p>
                                                        </small>
                                                        <table>
                                                            <thead>
                                                                <th class="verticalTableHeader">S.No </th>
                                                                <th class="verticalTableHeader">Course Code</th>
                                                                <th class="verticalTableHeader">Course Name</th>
                                                                <th class="verticalTableHeader">Branch</th>
                                                                <th class="verticalTableHeader">Year<br>I/II/III/IV/V
                                                                </th>
                                                                <th class="verticalTableHeader">Semester</th>
                                                                <th class="verticalTableHeader">Section</th>
                                                                <th class="verticalTableHeader">No of sessions Planned
                                                                </th>
                                                                <th class="verticalTableHeader">No of sessions Delivered
                                                                </th>
                                                                <th class="verticalTableHeader">%</th>
                                                                <th class="verticalTableHeader">Marks Scored</th>

                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                while ($row69 = mysqli_fetch_array($fetch69)) {

                                                                    $count += 1;
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $count; ?></td>
                                                                        <td><?php echo $row69['CC']; ?></td>
                                                                        <td><?php echo $row69['CN']; ?></td>
                                                                        <td><?php echo $row69['Bran']; ?></td>
                                                                        <td><?php echo $row69['Yea']; ?></td>
                                                                        <td><?php echo $row69['Semi']; ?></td>
                                                                        <td><?php echo $row69['Sec']; ?></td>
                                                                        <td><?php echo $row69['Nosp']; ?></td>
                                                                        <td><?php echo $row69['Nosd']; ?></td>
                                                                        <td><?php echo $row69['Per']; ?></td>
                                                                        <td><?php echo $row69['MS']; ?></td>
                                                                        <td><?php echo $row69['Param']; ?></td>
                                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" onclick="tla('<?php echo $row69['CC']; ?>',
                                                                         '<?php echo $row69['CN']; ?>','<?php echo $row69['Bran']; ?>','<?php echo $row69['Yea']; ?>','<?php echo $row69['Semi']; ?>','<?php echo $row69['Sec']; ?>','<?php echo $row69['Nosp']; ?>','<?php echo $row69['Nosd']; ?>','<?php echo $row69['Per']; ?>','<?php echo $row69['MS']; ?>','<?php echo $row69['Param']; ?>')">Edit</button></td>
                                                                        <td><a class="btn btn-danger" onclick="dfb1('<?php echo $quan_param; ?>')">Delete</a></td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <div id="Sediv">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Course Code</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="cc">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Course Name</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="cn">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Branch</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="form-control form-control-sm" id="bra">
                                                                                <option selected hidden value="">Select Your Branch</option>
                                                                                <option value="CSE">CSE</option>
                                                                                <option value="ECE">ECE</option>
                                                                                <option value="IT">IT</option>
                                                                                <option value="MECH">MECH</option>
                                                                                <option value="EEE">EEE</option>
                                                                                <option value="CIVIL">CIVIL</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Year</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="form-control form-control-sm" id="year">
                                                                                <option selected hidden value="">Select Your year</option>
                                                                                <option value="I">I</option>
                                                                                <option value="II">II</option>
                                                                                <option value="III">III</option>
                                                                                <option value="IV">IV</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Semister</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="form-control form-control-sm" id="sem">
                                                                                <option selected hidden value="">Select Your Semister</option>
                                                                                <option value="I-I">I-I</option>
                                                                                <option value="I-II">I-II</option>
                                                                                <option value="II-I">II-I</option>
                                                                                <option value="II-II">II-II</option>
                                                                                <option value="III-I">III-I</option>
                                                                                <option value="III-II">III-II</option>
                                                                                <option value="IV-I">IV-I</option>
                                                                                <option value="IV-II">IV-II</option>


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Section</label>
                                                                        <div class="col-sm-9">
                                                                            <select class="form-control form-control-sm" id="sec">
                                                                                <option selected hidden value="">Select Your Section</option>
                                                                                <option value="A">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="C">C</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">No of Sessions Planned</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="nosp">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">No of Sessions Delivered</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="nosd">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">%</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="per">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Marks Scored</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="ms">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid4">
                                                                        <button style="color: white;" class="btn btn-primary" onclick="formb()" id="hide">Insert</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <small style="font-size: 10px;">(91% to 100% = 10 Marks, 81% to
                                                            90%=8 Marks, 71% to 80%=5 Marks, 70% and less = 0 Marks
                                                            )
                                                        </small>
                                                    </th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <th>
                                                        <small style="font-size: 10px;">Other Academics
                                                            Activities
                                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Otshow">Add</a></p>
                                                        </small>
                                                        <table>
                                                            <thead>
                                                                <th class="verticalTableHeader">S.No </th>
                                                                <th class="verticalTableHeader">Course Code</th>
                                                                <th class="verticalTableHeader">Course Name</th>
                                                                <th class="verticalTableHeader">Branch</th>
                                                                <th class="verticalTableHeader">Year<br>I/II/III/IV/V
                                                                </th>
                                                                <th class="verticalTableHeader">Semester</th>
                                                                <th class="verticalTableHeader">Section</th>
                                                                <th class="verticalTableHeader">No of sessions Planned
                                                                </th>
                                                                <th class="verticalTableHeader">No of sessions Delivered
                                                                </th>
                                                                <th class="verticalTableHeader">%</th>
                                                                <th class="verticalTableHeader">Marks Scored</th>

                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="10" style="text-align: right;">
                                                                        <hr>Total Marks Obtained
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>

                                                        <div id="Otdiv">

                                                        </div>
                                                        <hr>
                                                        <small style="font-size: 10px;">(For each activity; 91% to 100%
                                                            = 6 Marks,81% to 90%=4 Marks,71% to 80%=2 Marks, 70% and
                                                            less = 0 Marks )</small>
                                                    </th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <th>
                                                        <small style="font-size: 10px;">Attainment of Course outcomes (
                                                            to be filled in consultation with course co-ordinator &
                                                            Professor Incharge-Academics)
                                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Atshow">Add</a></p>
                                                        </small>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sno</th>
                                                                    <th>Course Code</th>
                                                                    <th>Course Name</th>
                                                                    <th>No. of expected course outcomes</th>
                                                                    <th>No. of outcomesattained</th>
                                                                    <th>% <br> Achieved</th>
                                                                    <th>Marks Obtained</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            while ($row = mysqli_fetch_array($fetch)) {
                                                                $count1 += 1;
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $count1; ?></td>
                                                                    <td><?php echo $row['cc']; ?></td>
                                                                    <td><?php echo $row['cn']; ?></td>
                                                                    <td><?php echo $row['eco']; ?></td>
                                                                    <td><?php echo $row['oa']; ?></td>
                                                                    <td><?php echo $row['per']; ?></td>
                                                                    <td><?php echo $row['mo']; ?></td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1" onclick="oa('<?php echo $row['cc']; ?>','<?php echo $row['cn']; ?>','<?php echo $row['eco']; ?>','<?php echo $row['oa']; ?>','<?php echo $row['per']; ?>','<?php echo $row['mo']; ?>','<?php echo $row['Params']; ?>')">Edit</button>
                                                                    </td>
                                                                    <td><a class="btn btn-danger" onclick="dfb2('<?php echo $quan_param; ?>')">Delete</a></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </table>
                                                        <div id="Atdiv">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Course Code</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="ccc">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Course Name</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="cnn">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">No. of expected course outcomes</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="nco">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">No. of outcomesattained</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="noc">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">% Acheived</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="pera">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="moo">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid5">
                                                                    <button style="color: white;" class="btn btn-primary" onclick="formb3()" id="hide">Insert</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <small style="font-size: 10px;">(100% = 10 points in each course
                                                            or section and in proportion)
                                                        </small>
                                                    </th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <th>
                                                        <small style="font-size: 10px;">Assessment and Evaluation
                                                            related
                                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Asshow">Add</a></p>
                                                        </small>
                                                        <table>
                                                            <thead>
                                                                <th>Activity</th>
                                                                <th>Course Code</th>
                                                                <th>Marks Obtained</th>
                                                                <th>Edit</th>
                                                                <th>Delete</th>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                while ($row1 = mysqli_fetch_array($fetch1)) {
                                                                    $count2 += 1;
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $count2; ?></td>
                                                                        <td><?php echo $row1['sya']; ?></td>
                                                                        <td><?php echo $row1['cc']; ?></td>
                                                                        <td><?php echo $row1['mo']; ?></td>
                                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2" onclick="ae('<?php echo $row1['sya']; ?>',
                                                                         '<?php echo $row1['cc']; ?>','<?php echo $row1['mo']; ?>','<?php echo $row1['Params']; ?>')">Edit</button></td>
                                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        <div id="Asdiv">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control form-control-sm" id="sya">
                                                                            <option selected hidden value="">Select Your Activity</option>
                                                                            <option value="Setting Sem End Question Paper">Setting Sem End Question Paper</option>
                                                                            <option value="Setting Sem in Tests related question Paper">Setting Sem in Tests related question Paper</option>
                                                                            <option value="Setting Assignments related question paper">Setting Assignments related question paper</option>
                                                                            <option value="Developing Solutions to the question papers">Developing Solutions to the question papers</option>
                                                                            <option value="Submission of marks in Time">Submission of marks in Time</option>
                                                                            <option value="Course Handout preparation & circulation">Course Handout preparation & circulation</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Course Code</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="cc2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="mo2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid6">
                                                                        <button style="color: white;" class="btn btn-primary" onclick="formb4()" id="hide">Insert</button>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <hr>
                                                        <small style="font-size: 10px;">(Each Activity=5Marks per
                                                            Course)</small>
                                                    </th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <th>
                                                        <small style="font-size: 10px;">Examination work such as
                                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Exshow">Add</a></p>
                                                        </small>
                                                        <table class="table">
                                                            <thead>
                                                                <th>Sno</th>
                                                                <th>Activity</th>
                                                                <th>Marks Obtained</th>
                                                                <th>Edit</th>
                                                                <th>Delete</th>
                                                            </thead>
                                                            <tbody>

                                                                <?php
                                                                while ($row2 = mysqli_fetch_array($fetch2)) {
                                                                    $count3 += 1;
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $count3; ?></td>
                                                                        <td><?php echo $row2['sya1']; ?></td>
                                                                        <td><?php echo $row2['mo3']; ?></td>
                                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal3" onclick="ew('<?php echo $row2['sya1']; ?>',
                                                                         '<?php echo $row2['mo3']; ?>','<?php echo $row2['Params']; ?>')">Edit</button></td>
                                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        <div id="Exdiv">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control form-control-sm" id="sya1">
                                                                            <option selected hidden value="">Select Your Activity</option>
                                                                            <option value="Invigilation">Invigilation</option>
                                                                            <option value="Evaluation">Evaluation</option>
                                                                            <option value="Scrutiny">Scrutiny</option>
                                                                            <option value="Flying Squad Duties">Flying Squad Duties</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="mo3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid7">
                                                                    <button style="color: white;" class="btn btn-primary" onclick="formb5()" id="hide">Insert</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                    </div>
                                    <hr>
                                    <small style="font-size: 10px;">(Each Activity=5Marks per
                                        Course)</small>
                                    </th>
                                    <th></th>
                                    <th></th>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <th>
                                            <small style="font-size: 10px;">Use of Innovative Teaching -
                                                Learning Methodologies;ty
                                        </th>
                                        <th>Marks Obtained</th>
                                        </thead> use of ICT
                                        <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Usshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th>Marks Obtained</th>
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
                                                        <td><?php echo $row3['sya2']; ?></td>
                                                        <td><?php echo $row3['mo4']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal4" onclick="uit('<?php echo $row3['sya2']; ?>',
                                                         '<?php echo $row3['mo4']; ?>','<?php echo $row3['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="Usdiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya23">
                                                            <option selected hidden value="">Select Your Activity</option>
                                                            <option value="ICT Based Teaching material posting on e-learning site">ICT Based Teaching material posting on e-learning site</option>
                                                            <option value="E-Content and Developing Video Lectures">E-Content and Developing Video Lectures</option>
                                                            <option value="Innovating teaching methodologies (Lectures/Practicals/Skilling)">Innovating teaching methodologies (Lectures/Practicals/Skilling)</option>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mo4">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid8">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb6()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <hr>
                                <small style="font-size: 10px;">(Each Activity=10Marks
                                    Max)</small>
                                </th>
                                <th></th>
                                <th></th>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <th>
                                        <small style="font-size: 10px;">Additional Contribution
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Adshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th>No. of Hours Taken</th>
                                                <th>Marks Obtained</th>
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
                                                        <td><?php echo $row4['sya3']; ?></td>
                                                        <td><?php echo $row4['noht']; ?></td>
                                                        <td><?php echo $row4['mo5']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal5" onclick="ac('<?php echo $row4['sya3']; ?>',
                                                        '<?php echo $row4['noht']; ?>','<?php echo $row4['mo5']; ?>','<?php echo $row4['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="Addiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya3">
                                                            <option selected hidden value="">Select Your Activity</option>
                                                            <option value="Remedial classes taken for slow learners">Remedial classes taken for slow learners</option>
                                                            <option value="Bridge Course hrs taken">Bridge Course hrs taken</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">No. of Hours Taken</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="noht">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="mo5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid9">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb7()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <small style="font-size: 10px;">(Each activity: 20 points for 10
                                            hours and in proportion)</small>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <th>
                                        <small style="font-size: 10px;">Student Performance
                                            Monitoring
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Stshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th>Maximum Marks</th>
                                                <th>Marks Obtained</th>
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
                                                        <td><?php echo $row5['sya4']; ?></td>
                                                        <td><?php echo $row5['mm1']; ?></td>
                                                        <td><?php echo $row5['mo6']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal6" onclick="spm('<?php echo $row5['sya4']; ?>',
                                                        '<?php echo $row5['mm1']; ?>','<?php echo $row5['mo6']; ?>','<?php echo $row5['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="Stdiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya4">
                                                            <option selected hidden value="">Select Your Activity</option>
                                                            <option value="Intimation of Student Progress to parents & Concerned Authorities (Counselling Activity)">Intimation of Student Progress to parents & Concerned Authorities (Counselling Activity)</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">maximum Marks</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control form-control-sm" id="mm1">
                                                                <option selected hidden value="">Select Maximum Marks</option>
                                                                <option value="20">20</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="mo6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid10">
                                                        <button style="color: white;" class="btn btn-primary" onclick="formb8()" id="hide">Insert</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            <small style="font-size: 10px;">(Minimum Three Interactions with
                                                the Parents is required to qualify)</small>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <th>
                                        <small style="font-size: 10px;">Student Feedback
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Feshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Course Code</th>
                                                <th>Semister</th>
                                                <th>% of feedback Achieved</th>
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
                                                        <td><?php echo $row6['cc3']; ?></td>
                                                        <td><?php echo $row6['semis']; ?></td>
                                                        <td><?php echo $row6['pofa']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal7" onclick="sf('<?php echo $row6['cc3']; ?>',
                                                        '<?php echo $row6['semis']; ?>','<?php echo $row6['pofa']; ?>','<?php echo $row6['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="Fediv">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Course Code</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="cc3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Semister</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="semis">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">% of feedback Achieved</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="pofa">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid11">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb9()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <small style="font-size: 10px;">100% Average feedback = 50 Marks
                                            and in proportion (All courses including Theory, Practicals,
                                            Tutorials, Skilling as Mentioned in S No 1 and S No
                                            2</small>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <th>
                                        <small style="font-size: 10px;">Student Pass %
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Pashow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Course Code</th>
                                                <th>Semister</th>
                                                <th> Pass % </th>
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
                                                        <td><?php echo $row7['cc4']; ?></td>
                                                        <td><?php echo $row7['semis1']; ?></td>
                                                        <td><?php echo $row7['pasp']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal8" onclick="spp('<?php echo $row7['cc4']; ?>',
                                                        '<?php echo $row7['semis1']; ?>','<?php echo $row7['pasp']; ?>','<?php echo $row7['Params']; ?>')">Edit</button></td>
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
                                                        <label class="col-sm-3 col-form-label">Course Code</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="cc4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Semister</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="semis1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Pass %</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="pasp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid12">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb10()" id="hide">Insert</button>
                                                </div>
                                            </div>


                                        </div>
                                        <hr>
                                        <small style="font-size: 10px;">(91% to 100% = 50 Marks,81% to
                                            90%=45 Marks,71% to 80%=40 Marks, 70% and less = Proportion
                                            Marks on Average % Obtained)</small>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>11</th>
                                    <th>
                                        <small style="font-size: 10px;">Contribution Through
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Coshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th>Maximum Marks</th>
                                                <th> Marks Obtained </th>
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
                                                        <td><?php echo $row8['sya5']; ?></td>
                                                        <td><?php echo $row8['sya6']; ?></td>
                                                        <td><?php echo $row8['mo7']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal9" onclick="ct('<?php echo $row8['sya5']; ?>',
                                                        '<?php echo $row8['sya6']; ?>','<?php echo $row8['mo7']; ?>','<?php echo $row8['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="Codiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya5">
                                                            <option selected hidden value="">Select Your Activity</option>
                                                            <option value="Guest Lecture(s) delivered">Guest Lecture(s) delivered</option>
                                                            <option value="Faculty orientation Lecture(s) delivered">Faculty orientation Lecture(s) delivered</option>
                                                            <option value="Subject Related Event(s) like Expos, Exhibitions etc">Subject Related Event(s) like Expos, Exhibitions etc</option>
                                                            <option value="Articles in college / department magazine and university volume(s)">Articles in college / department magazine and university volume(s)</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Max Marks</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya6">
                                                            <option selected hidden value="">Select Max Marks</option>
                                                            <option value="10">10</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mo7">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid13">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb11()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>12</th>
                                    <th>
                                        <small style="font-size: 10px;">Institutional Co-curricular
                                            activities for students such as
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Inshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th>Maximum Marks</th>
                                                <th> Marks Obtained </th>
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
                                                        <td><?php echo $row9['sya7']; ?></td>
                                                        <td><?php echo $row9['sya8']; ?></td>
                                                        <td><?php echo $row9['mo8']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal10" onclick="ict('<?php echo $row9['sya7']; ?>',
                                                        '<?php echo $row9['sya8']; ?>','<?php echo $row9['mo8']; ?>','<?php echo $row9['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <div id="Indiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya7">
                                                            <option selected hidden value="">select your activity</option>
                                                            <option value="Field studies/educational tours">Field studies/educational tours</option>
                                                            <option value="IRP training">IRP training</option>
                                                            <option value="Placement activity/ Practice school">Placement activity/ Practice school</option>
                                                            <option value="Continous upgradation of knowledge in relevent field with value added sessions like Coursera, NPTL,MOOCS etc">Continous upgradation of knowledge in relevent field with value added sessions like Coursera, NPTL,MOOCS etc</option>
                                                            <option value="Contribution to bridge gap between industry expectations and academics">Contribution to bridge gap between industry expectations and academics</option>
                                                            <option value="Industry connect (related to course)">Industry connect (related to course)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Maximum Marks</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya8">
                                                            <option selected hidden value="">Select Your Activity</option>
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
                                                        <input type="text" class="form-control" id="mo8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid14">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb12()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>13</th>
                                    <th>
                                        <small style="font-size: 10px;">Participation in
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Ipshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th> Marks/ Activity</th>
                                                <th> Marks Obtained </th>
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
                                                        <td><?php echo $row10['sya9']; ?></td>
                                                        <td><?php echo $row10['sya10']; ?></td>
                                                        <td><?php echo $row10['mo9']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal11" onclick="pi('<?php echo $row10['sya9']; ?>',
                                                        '<?php echo $row10['sya10']; ?>','<?php echo $row10['mo9']; ?>','<?php echo $row10['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div id="Ipdiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya9">
                                                            <option selected hidden value="">select your activity</option>
                                                            <option value="Short term training Programmes/ FDPs in educational technology organised by premier institutes/ corporates">Short term training Programmes/ FDPs in educational technology organised by premier institutes/ corporates</option>
                                                            <option value="New course design &Curriculum development">New course design &Curriculum development</option>
                                                            <option value="Coding competitions (general/academic)">Coding competitions (general/academic)</option>
                                                            <option value="Any other relevant activity: Specify with proof">Any other relevant activity: Specify with proof</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks/ Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya10">
                                                            <option selected hidden value="">select your Marks/activity</option>
                                                            <option value="10">10</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Marks Obtained</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="mo9">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid15">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb13()" id="hide">Insert</button>
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>14</th>
                                    <th>
                                        <small style="font-size: 10px;">Academic Assessment by the HOD
                                            <p style=" Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="Acshow">Add</a></p>
                                        </small>
                                        <table class="table">
                                            <thead>
                                                <th>Sno</th>
                                                <th>Activity</th>
                                                <th> Max Marks</th>
                                                <th> Marks Obtained </th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row11 = mysqli_fetch_array($fetch11)) {
                                                    $count12 += 1;
                                                ?>
                                                    <tr>
                                                        <td><?php echo $count12; ?></td>
                                                        <td><?php echo $row11['sya11']; ?></td>
                                                        <td><?php echo $row11['sya12']; ?></td>
                                                        <td><?php echo $row11['mo10']; ?></td>
                                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal12" onclick="aa('<?php echo $row11['sya11']; ?>',
                                                        '<?php echo $row11['sya12']; ?>','<?php echo $row11['mo10']; ?>','<?php echo $row11['Params']; ?>')">Edit</button></td>
                                                        <td><a class="btn btn-danger" onclick="del('<?php echo $quan_param; ?>')">Delete</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>

                                        </table>
                                        <div id="Acdiv">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Activity</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya11">
                                                            <option selected hidden value="">select your activity</option>
                                                            <option value="Class room discipline">Class room discipline</option>
                                                            <option value="Time Management & Class adjustment">Time Management & Class adjustment</option>
                                                            <option value="Syllabus completion in time">Syllabus completion in time</option>
                                                            <option value="Feedback by Peers/Principal/Dean/COE">Feedback by Peers/Principal/Dean/COE</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Maximum Marks</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control form-control-sm" id="sya12">
                                                            <option selected hidden value="">Select Your Activity</option>
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
                                                        <input type="text" class="form-control" id="mo10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid16">
                                                    <button style="color: white;" class="btn btn-primary" onclick="formb14()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <small style="font-size: 10px;">(To be filled by respective HOD
                                            by collecting the information from year/class coordinator,
                                            Course Co-ordinator/ Concerned Incharges)</small>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tbody>



                                </table>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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



    <!-- Update Teaching learning Evaluation -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label class="col-sm-3 col-form-label">Course Code</label>
                            <input type="text" class="form-control" id="a4">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">Course Name</label>
                            <input type="text" class="form-control" id="b4">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Branch</label>
                            <select class="form-control form-control-sm" id="c4">
                                <option selected hidden value="">Select Your Branch</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="IT">IT</option>
                                <option value="MECH">MECH</option>
                                <option value="EEE">EEE</option>
                                <option value="CIVIL">CIVIL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Year</label>
                            <select class="form-control form-control-sm" id="d4">
                                <option selected hidden value="">Select Your year</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Semister</label>
                            <select class="form-control form-control-sm" id="e4">
                                <option selected hidden value="">Select Your Semister</option>
                                <option value="I-I">I-I</option>
                                <option value="I-II">I-II</option>
                                <option value="II-I">II-I</option>
                                <option value="II-II">II-II</option>
                                <option value="III-I">III-I</option>
                                <option value="III-II">III-II</option>
                                <option value="IV-I">IV-I</option>
                                <option value="IV-II">IV-II</option>


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Section</label>
                            <select class="form-control form-control-sm" id="f4">
                                <option selected hidden value="">Select Your Section</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No of Sessions Planned</label>
                            <input type="text" class="form-control" id="g4">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <input type="text" class="form-control" id="h4">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No of Sessions Delivered</label>
                            <input type="text" class="form-control" id="i4">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">%</label>
                            <input type="text" class="form-control" id="j4">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="k4">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb1">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update Attainment of Course outcomes ( to be filled in consultation with course co-ordinator & Professor Incharge-Academics) -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="recipient-name" class="col-form-label">Course Code </label>
                            <input type="text" class="form-control" id="a5">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Course Name</label>
                            <input type="text" class="form-control" id="b5">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. of expected course outcomes</label>
                            <input type="text" class="form-control" id="c5">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. of outcomesattained</label>
                            <input type="text" class="form-control" id="d5">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">% Achieved</label>
                            <input type="text" class="form-control" id="e5">
                        </div>
                        <div class="form-group">
                            <label for="text" class="col-form-label">Marks Obtained</label>
                            <textarea class="form-control" id="f5"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="g5">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb2">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update 	Assessment and Evaluation related -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="recipient-name" class="col-form-label">Select your activity</label>
                            <select class="form-control form-control-sm" id="a6">
                                <option selected hidden value="">Select Your Activity</option>
                                <option value="Setting Sem End Question Paper">Setting Sem End Question Paper</option>
                                <option value="Setting Sem in Tests related question Paper">Setting Sem in Tests related question Paper</option>
                                <option value="Setting Assignments related question paper">Setting Assignments related question paper</option>
                                <option value="Developing Solutions to the question papers">Developing Solutions to the question papers</option>
                                <option value="Submission of marks in Time">Submission of marks in Time</option>
                                <option value="Course Handout preparation & circulation">Course Handout preparation & circulation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Course Code</label>
                            <input type="text" class="form-control" id="b6">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c6">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d6">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb3">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update 	Examination work such as -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a7">
                                <option selected hidden value="">Select Your Activity</option>
                                <option value="Invigilation">Invigilation</option>
                                <option value="Evaluation">Evaluation</option>
                                <option value="Scrutiny">Scrutiny</option>
                                <option value="Flying Squad Duties">Flying Squad Duties</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">College</label>
                            <input type="text" class="form-control" id="b7">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="c7">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb4">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update 	Use of Innovative Teaching - Learning Methodologies;ty -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a8">
                                <option selected hidden value="">Select Your Activity</option>
                                <option value="ICT Based Teaching material posting on e-learning site">ICT Based Teaching material posting on e-learning site</option>
                                <option value="E-Content and Developing Video Lectures">E-Content and Developing Video Lectures</option>
                                <option value="Innovating teaching methodologies (Lectures/Practicals/Skilling)">Innovating teaching methodologies (Lectures/Practicals/Skilling)</option>


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="b8">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="c8">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb5">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update Additional Contribution -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a9">
                                <option selected hidden value="">Select Your Activity</option>
                                <option value="Remedial classes taken for slow learners">Remedial classes taken for slow learners</option>
                                <option value="Bridge Course hrs taken">Bridge Course hrs taken</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">No. of Hours Taken</label>
                            <input type="text" class="form-control" id="b9">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c9">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d9">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb6">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update  Student Performance Monitoring -->
    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-md" id="a10">
                                <option selected hidden value="">Select your Activity</option>
                                <option value="Intimation of Student Progress to parents & Concerned Authorities (Counselling Activity)">Intimation of Student Progress to parents & Concerned Authorities (Counselling Activity)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Select Max Marks</label>
                            <select class="form-control form-control-md" id="b10">
                                <option selected hidden value="">Select Max Marks</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <input type="text" class="form-control" id="c10">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d10">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb7">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update  Student Feedback -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="recipient-name" class="col-form-label">Course Code</label>
                            <input type="text" class="form-control" id="a11">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Semister</label>
                            <input type="text" class="form-control" id="b11">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">% of feedback Achieved</label>
                            <input type="text" class="form-control" id="c11">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d11">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb8">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update  Student Pass % -->
    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="recipient-name" class="col-form-label">Course Code</label>
                            <input type="text" class="form-control" id="a12">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Semister</label>
                            <input type="text" class="form-control" id="b12">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Pass %</label>
                            <input type="text" class="form-control" id="c12">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d12">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb9">Update</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Update  Contribution Through  -->
    <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a13">
                                <option selected hidden value="">Select Your Activity</option>
                                <option value="Guest Lecture(s) delivered">Guest Lecture(s) delivered</option>
                                <option value="Faculty orientation Lecture(s) delivered">Faculty orientation Lecture(s) delivered</option>
                                <option value="Subject Related Event(s) like Expos, Exhibitions etc">Subject Related Event(s) like Expos, Exhibitions etc</option>
                                <option value="Articles in college / department magazine and university volume(s)">Articles in college / department magazine and university volume(s)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Max Marks</label>
                            <select class="form-control form-control-md" id="b13">
                                <option selected hidden value="">Select Max marks</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c13">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d13">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb10">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update Institutional Co-curricular activities for students such as  -->
    <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a14">
                                <option selected hidden value="">select your activity</option>
                                <option value="Field studies/educational tours">Field studies/educational tours</option>
                                <option value="IRP training">IRP training</option>
                                <option value="Placement activity/ Practice school">Placement activity/ Practice school</option>
                                <option value="Continous upgradation of knowledge in relevent field with value added sessions like Coursera, NPTL,MOOCS etc">Continous upgradation of knowledge in relevent field with value added sessions like Coursera, NPTL,MOOCS etc</option>
                                <option value="Contribution to bridge gap between industry expectations and academics">Contribution to bridge gap between industry expectations and academics</option>
                                <option value="Industry connect (related to course)">Industry connect (related to course)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Max Marks</label>
                            <select class="form-control form-control-sm" id="b14">
                                <option selected hidden value="">Select Max Marks</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c14">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d14">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb11">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update  Participation in -->
    <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a15">
                                <option selected hidden value="">select your activity</option>
                                <option value="Short term training Programmes/ FDPs in educational technology organised by premier institutes/ corporates">Short term training Programmes/ FDPs in educational technology organised by premier institutes/ corporates</option>
                                <option value="New course design &Curriculum development">New course design &Curriculum development</option>
                                <option value="Coding competitions (general/academic)">Coding competitions (general/academic)</option>
                                <option value="Any other relevant activity: Specify with proof">Any other relevant activity: Specify with proof</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks/Activity</label>
                            <select class="form-control form-control-sm" id="b15">
                                <option selected hidden value="">select your Marks/activity</option>
                                <option value="10">10</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c15">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d15">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb12">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Update  Academic Assessment by the HOD  -->
    <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <select class="form-control form-control-sm" id="a16">
                                <option selected hidden value="">select your activity</option>
                                <option value="Class room discipline">Class room discipline</option>
                                <option value="Time Management & Class adjustment">Time Management & Class adjustment</option>
                                <option value="Syllabus completion in time">Syllabus completion in time</option>
                                <option value="Feedback by Peers/Principal/Dean/COE">Feedback by Peers/Principal/Dean/COE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Max Marks</label>
                            <select class="form-control form-control-sm" id="b16">
                                <option selected hidden value="">Select Max Marks</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marks Obtained</label>
                            <input type="text" class="form-control" id="c16">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="d16">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uformb13">Update</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>