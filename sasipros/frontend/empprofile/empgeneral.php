<?php
session_start();
include '../../backend/dashcount.php';
include '../../backend/db.php';
$email = $_SESSION["email"];
@$sasiid = $_SESSION["sasiid"];
@$name = $_SESSION["name"];
$details_of_emp = "select *from details where Email='$email' and Sasiid='$sasiid'";
$execute_query = mysqli_query($connection, $details_of_emp);
$details_row = mysqli_fetch_array($execute_query);
@$emp_name = $details_row['Name'];
@$emp_Designation = $details_row['Des'];
@$emp_dep = $details_row['Dep'];
@$emp_dob = $details_row['DOB'];
@$emp_join = $details_row['DOJ'];
@$emp_aos = $details_row['AOS'];
@$emp_phone = $details_row['Phone'];
@$emp_email = $details_row['Email'];
@$emp_profile = $details_row['Image'];

/* Qualification fetch code*/
$quali_of_emp = "select *from qualifications where Sasiid='$sasiid'";
$execute_query1 = mysqli_query($connection, $quali_of_emp);
$coun = 0;
/* Training fetch code*/
$training_of_emp = "select *from training where Sasiid='$sasiid'";
$execute_query2 = mysqli_query($connection, $training_of_emp);
$coun1 = 0;
/* Teaching fetch code*/
$teaching_of_emp = "select *from teaching where Sasiid='$sasiid'";
$execute_query3 = mysqli_query($connection, $teaching_of_emp);
$coun2 = 0;

/*ranks Fetch*/
$ranks_of_emp = "select *from ranks where Sasiid='$sasiid'";
$execute_query4 = mysqli_query($connection, $ranks_of_emp);
$coun3 = 0;
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../middleware/updategen.js"></script>
    <script src="../middleware/qualification.js"></script>
    <script src="../middleware/updateall.js"></script>
    <script src="../middleware/deletea.js"></script>
    <script src="../middleware/formaupdate.js"></script>
</head>

<body onload="allhide()">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">
                        <h2>SITE APPRAISAL PORTAL</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Your General Information</h4>
                    <div class="text-end">
                        <svg id="update" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <path d="M0,172v-172h172v172z" fill="#cccccc"></path>
                                <g fill="#000000">
                                    <path d="M123.4907,27.9502c-1.46701,0 -2.93563,0.55882 -4.05363,1.67968l-9.78694,9.78694l22.93325,22.93325l9.78694,-9.78694c2.24173,-2.24173 2.24173,-5.87127 0,-8.10726l-14.82598,-14.82599c-1.12086,-1.12086 -2.58662,-1.67968 -4.05364,-1.67968zM101.05016,48.01679l-65.93309,65.93309v22.93325h22.93325l65.93309,-65.93309z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <p class="card-description">
                        Personal info
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $emp_name; ?>" id="upname" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Designation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $emp_Designation; ?>" id="updes" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Department</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-md" id="updep">
                                        <?php
                                        $dep = ["CSE", "ECE", "IT"];
                                        ?>
                                        <option selected hidden value="">Select Your Department</option>
                                        <?php
                                        foreach ($dep as $d) {
                                            if ($emp_dep == $d) {
                                        ?>
                                                <option value="<?php echo $emp_dep; ?>" selected><?php echo $emp_dep; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <option value="ECE" $select_value>ECE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" placeholder="dd/mm/yyyy" type="date" value="<?php echo $emp_dob; ?>" id="updob" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Joining SITE</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $emp_join; ?>" id="updoj" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Specilization</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-md" id="upaos">
                                        <?php
                                        $deps = ["CSE", "ECE", "IT"];
                                        ?>
                                        <option selected hidden value="">Select Your Specialization</option>
                                        <?php
                                        foreach ($deps as $d) {
                                            if ($emp_aos == $d) {
                                        ?>
                                                <option value="<?php echo $emp_aos; ?>" selected><?php echo $emp_aos; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $emp_phone; ?>" id="upphone" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email ID</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" value="<?php echo $emp_email; ?>" id="upemail" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid">
                                <div class="col-sm-9">
                                    <button style="color: white;" class="btn btn-primary" onclick="genupdate()" id="hide">Update</button>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description">
                                Qualification
                            <p style="Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="qshow">Add</a>
                            </p>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sno</th>
                                            <th scope="col">Degree</th>
                                            <th scope="col">University</th>
                                            <th scope="col">College</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Year Of Passing</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($quali_row = mysqli_fetch_array($execute_query1)) {
                                        @$quali_deg = $quali_row['Deg'];
                                        @$quali_uni = $quali_row['University'];
                                        @$quali_coll = $quali_row['College'];
                                        @$quali_stat = $quali_row['State'];
                                        @$quali_class = $quali_row['Clas'];
                                        @$quali_yop = $quali_row['Yop'];
                                        @$quan_param = $quali_row['Param'];
                                        $coun = $coun + 1;
                                    ?>
                                        <tr>
                                            <td><?php echo $coun; ?></td>
                                            <td><?php echo $quali_deg; ?></td>
                                            <td><?php echo $quali_uni; ?></td>
                                            <td><?php echo $quali_coll; ?></td>
                                            <td><?php echo $quali_stat; ?></td>
                                            <td><?php echo $quali_class; ?></td>
                                            <td><?php echo $quali_yop; ?></td>
                                            <td><a class="btn btn-warning" href="empprofile/updatetemps?paramterconfigauth=<?php echo $quan_param; ?>">Edit</a></td>
                                            <td><a class="btn btn-danger" onclick="dfa2('<?php echo $quan_param; ?>')">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <tbody>
                                        <?php
                                        if ($coun == 0) {
                                        ?>
                                            <tr>
                                                <td colspan="7">
                                                    <center><b>No Data Found</b></center>
                                                    <hr>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        <tr>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div id="qdiv">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Degree</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="deg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">University</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="uni">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">College</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="coll">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">State</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="state">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Class</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="clas">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Year of Pass</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="yop">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid1">
                                            <div class="col-sm-9">
                                                <button style="color: white;" class="btn btn-primary" onclick="qualifications()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description">
                                Rank/Prizes/Medals won at College / University during education/in
                                service
                            <p style="Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="rshow">Add</a></p>
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sno</th>
                                        <th scope="col">Rank</th>
                                        <th scope="col">College</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>
                                <?php
                                while ($rank_row = mysqli_fetch_array($execute_query4)) {
                                    @$rank_type = $rank_row['Rtype'];
                                    @$rank_coll = $rank_row['Rcoll'];
                                    @$rank_date = $rank_row['Rdate'];
                                    @$rank_des = $rank_row['Rdes'];
                                    if ($rank_des == "") {
                                        $rank_des = "Data not Found";
                                    }
                                    @$rank_param = $rank_row['Param'];
                                    $coun3 = $coun3 + 1;
                                ?>
                                    <tr>
                                        <td><?php echo $coun3; ?></td>
                                        <td><?php echo $rank_type; ?></td>
                                        <td><?php echo $rank_coll; ?></td>
                                        <td><?php echo $rank_date; ?></td>
                                        <td><?php echo $rank_des; ?></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" onclick="uprank('<?php echo $rank_type; ?>',
                                        '<?php echo $rank_coll; ?>','<?php echo $rank_date; ?>','<?php echo $rank_des; ?>','<?php echo $rank_param; ?>')">Edit</button></td>
                                        <td><a class="btn btn-danger" onclick="dfa3('<?php echo $rank_param; ?>')">Delete</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <tbody>
                                    <?php
                                    if ($coun == 0) {
                                    ?>
                                        <tr>
                                            <td colspan="7">
                                                <center><b>No Data Found</b></center>
                                                <hr>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div id="rdiv">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Rank Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-md" id="rtype">
                                                    <option selected hidden value="">Select Rank Type</option>
                                                    <option value="Rank">Rank</option>
                                                    <option value="Prize">Prize</option>
                                                    <option value="Medal">Medal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">College</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="rcoll" placeholder="Enter Your College" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="rdate" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="rdes" placeholder="Enter Description (optional)"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid0">
                                            <div class="col-sm-9">
                                                <button style="color: white;" class="btn btn-primary" onclick="rank()" id="hide">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description">Additional Training
                            <p style="Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="ashow">Add</a></p>
                            </p>
                            <table class="table">

                                <tr>
                                    <th scope="col" rowspan="2">Sno</th>
                                    <th scope="col" colspan="2">
                                        <center>Period</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Total Period of Training in Weeks</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Nature of Program</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Institution</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Remarks</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Edit</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Delete</center>
                                    </th>
                                </tr>
                                <tr>
                                    <td>From</td>
                                    <td>To</td>
                                </tr>
                                <?php
                                while ($train_det = mysqli_fetch_array($execute_query2)) {
                                    $coun1 = $coun1 + 1;
                                    $a = $train_det['Pfrom'];
                                    $b = $train_det['Pto'];
                                    $c = $train_det['Tper'];
                                    $d = $train_det['Nop'];
                                    $e = $train_det['Institution'];
                                    $f = $train_det['Remarks'];
                                    $g = $train_det['Param'];
                                ?>
                                    <tr>
                                        <td><?php echo $coun1; ?></td>
                                        <td><?php echo  $train_det['Pfrom']; ?></td>
                                        <td><?php echo  $train_det['Pto']; ?></td>
                                        <td><?php echo  $train_det['Tper']; ?></td>
                                        <td><?php echo  $train_det['Nop']; ?></td>
                                        <td><?php echo  $train_det['Institution']; ?></td>
                                        <td><?php echo  $train_det['Remarks']; ?></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1" onclick="upaddtrain('<?php echo $a; ?>',
                                        '<?php echo $b; ?>','<?php echo $c; ?>','<?php echo $d; ?>','<?php echo $e; ?>','<?php echo $f; ?>','<?php echo $g; ?>')">Edit</button></td>
                                        <td><a class="btn btn-danger" onclick="dfa4('<?php echo $train_det['Param']; ?>')">Delete</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($coun1 == 0) {
                                ?>
                                    <tr>
                                        <td colspan="7">
                                            <center><b>No Data Found</b></center>
                                            <hr>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </table>
                            <div id="adiv">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Period From</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="pf" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Period To</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="pt" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Total Period of Training</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="tpot" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nature of Program</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nop" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Institution</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ini" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Remarks</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Remarks" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid2">
                                        <button style="color: white;" class="btn btn-primary" onclick="training()" id="hide">Insert</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description">Total Experience
                            <p style="Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="tshow">Add</a></p>
                            </p>

                            <table class="table">

                                <tr>
                                    <th scope="col" rowspan="2">Sno</th>
                                    <th scope="col" rowspan="2">
                                        <center>Position Held</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Status</center>
                                    </th>
                                    <th scope="col" colspan="2">
                                        <center>Duration</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>No of Year(Fraction Allowed)</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Name of Organization</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Edit</center>
                                    </th>
                                    <th scope="col" rowspan="2">
                                        <center>Delete</center>
                                    </th>
                                </tr>
                                <tr>
                                    <td>From</td>
                                    <td>To</td>

                                </tr>
                                <?php
                                while ($teach_det = mysqli_fetch_array($execute_query3)) {
                                    $coun2 = $coun2 + 1;

                                ?>
                                    <tr>
                                        <td><?php echo $coun2; ?></td>
                                        <td><?php echo  $teach_det['Pheld']; ?></td>
                                        <td><?php echo  $teach_det['Status']; ?></td>
                                        <td><?php echo  $teach_det['Df']; ?></td>
                                        <td><?php echo  $teach_det['Dt']; ?></td>
                                        <td><?php echo  $teach_det['Fraction']; ?></td>
                                        <td><?php echo  $teach_det['Insti']; ?></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2" onclick="uptoex('<?php echo $teach_det['Pheld']; ?>',
                                        '<?php echo $teach_det['Status']; ?>','<?php echo $teach_det['Df']; ?>','<?php echo $teach_det['Dt']; ?>','<?php echo $teach_det['Fraction']; ?>','<?php echo $teach_det['Insti']; ?>','<?php echo $teach_det['Param']; ?>')">Edit</button></td>
                                        <td><a class="btn btn-danger" onclick="dfa5('<?php echo $teach_det['Param']; ?>')">Delete</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <?php
                                if ($coun2 == 0) {
                                ?>
                                    <tr>
                                        <td colspan="8">
                                            <center><b>No Data Found</b></center>
                                            <hr>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </table>
                            <div id="tdiv">
                                <div id="adiv">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Position Held</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="ph" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Status</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control form-control-sm" id="status">
                                                        <option value="Temporary">Temporary</option>
                                                        <option value="Permanent">Permanent</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Duration From</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="df" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Duration To</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="dt" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No. of years(Fraction allowed)</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="noy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Name of the University /Institute/ Organization</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nou" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <input type="hidden" value="<?php echo $sasiid; ?>" id="sasiid3">
                                                    <button style="color: white;" class="btn btn-primary" onclick="teaching()" id="hide">Insert</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="card-description">
                                Instructions
                            <p style="Text-align:right; color: white; margin-top: -1cm;"><a class="btn btn-success" id="ishow">Show</a></p>
                            </p>
                            <div id="idiv">
                                <label>The appraisal form consists of the following Components, Maximum
                                    macros for each of the
                                    components and the scaling carried</label>
                                <table class="table">

                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">
                                            <center>Category</center>
                                        </th>
                                        <th scope="col">
                                            <center>Maximum Marks</center>
                                        </th>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td style="text-align:center">Teaching-Learning And Evaluation
                                        </td>
                                        <td>300</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td style="text-align:center">Research and Allied Contributions
                                        </td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td style="text-align:center">Administration</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td style="text-align:center">Extension Activities</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;" align="right" colspan="2">Total
                                        </td>
                                        <td>750</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; font-weight: bold;" align="right" colspan="2">Additional Points as
                                            per Choice</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;" align="right" colspan="2">Grand
                                            Total Points</td>
                                        <td>1000</td>
                                    </tr>
                                </table>
                                <div style="text-align: left;">
                                    <ol>
                                        <li>The total score considering items number 1 to 4 is for 750
                                            marks, as shown in the above table. Additionally, a faculty
                                            can gain additional 250 marks for any one category between
                                            S.No 2 to 4 in the above table as per their area of Interest
                                            and Expertise.<br><br></li>
                                        <li>In Category-I (300 Marks), The maximum score from S.No-1 to
                                            S.No-13 is 270 Marks and S.No-14 HOD Assessment is Mandatory
                                            for 30Marks.<br><br></li>
                                        <li>Suppose a faculty wants 250 additional marks added to the
                                            RESEARCH AND ALLIED CONTRIBUTIONS Category (i.e. S.No 2),
                                            then the scoring composition would be (300 + 400 + 150 +
                                            150= 1000) or if any faculty wants 250 additional marks
                                            added to the EXTENSION ACTIVITIES Category (i.e. S.No 4),
                                            then the scoring composition would be (300 + 150 + 150 + 400
                                            = 1000)<br><br> </li>
                                        <li>The period considered for Category 1 (S.No.1) - 1st July
                                            2020 to 30th June 2021<br><br></li>
                                        <li>The period considered for Category 2 (S.No.2) - 1st Jan 2020
                                            to 31st Dec 2020<br><br></li>
                                        <li>The period considered for Category 3 (S.No.3) - 1st July
                                            2020 to 30th June 2021<br><br></li>
                                        <li>The period considered for Category 4 (S.No.4) - 1st July
                                            2020 to 30th June 2021<br><br></li>
                                        <li>Faculty has to submit all the proofs for all the points
                                            claimed duly approved by the HOD concerned.</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {

            $("#qshow").click(function() {
                $("#qdiv").toggle();
            });
            $("#rshow").click(function() {
                $("#rdiv").toggle();
            });
            $("#ashow").click(function() {
                $("#adiv").toggle();
            });
            $("#tshow").click(function() {
                $("#tdiv").toggle();
            });
            $("#ishow").click(function() {
                $("#idiv").toggle();
            });
        });
    </script>
    <script>
        function allhide() {


            document.getElementById('qdiv').style.display = "none";
            document.getElementById('rdiv').style.display = "none";
            document.getElementById('adiv').style.display = "none";
            document.getElementById('tdiv').style.display = "none";
            document.getElementById('idiv').style.display = "none";
        }
    </script>
    <script>
        $("#hide").hide();
        $('#upname,#updes,#updob,#updoj,#upphone,#upemail').attr('readonly', true);
        $('#updeg,#upuni,#upcoll,#upstat,#upclass,#upyop').attr('readonly', true);
        $('#updep,#upaos').attr('disabled', true);
        $(document).ready(function() {
            $("#update").click(function() {
                $("#hide").show();
                $('#upname,#updes,#updob,#updoj,#upphone,#upemail').attr('readonly', false);
                $('#updep,#upaos').attr('disabled', false);
            });
            $("#update1").click(function() {
                $('#updeg,#upuni,#upcoll,#upstat,#upclass,#upyop').attr('readonly', false);
            });
        });
    </script>
    <!-- Update Rank -->
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
                            <label for="recipient-name" class="col-form-label">Rank</label>
                            <select class="form-control form-control-md" id="urank">
                                <option selected hidden value="">Select Rank Type</option>
                                <option value="Rank">Rank</option>
                                <option value="Prize">Prize</option>
                                <option value="Medal">Medal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">College</label>
                            <input type="text" class="form-control" id="ucoll">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Date</label>
                            <input type="date" class="form-control" id="udate">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" id="urd"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="rpa">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uforma3">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Update Additional Training -->
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
                            <label for="recipient-name" class="col-form-label">Period From</label>
                            <input type="date" class="form-control" id="a1">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Period To</label>
                            <input type="date" class="form-control" id="b1">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Total Period of Training</label>
                            <input type="text" class="form-control" id="c1">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Nature of Program</label>
                            <input type="text" class="form-control" id="d1">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Institution</label>
                            <input type="text" class="form-control" id="e1">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Remarks</label>
                            <input type="text" class="form-control" id="f1">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="g1">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uforma4">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Update Total Experience -->
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
                            <label for="recipient-name" class="col-form-label">Position Held</label>
                            <input type="text" class="form-control" id="a2">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status</label>
                            <select class="form-control form-control-sm" id="b2">
                                <option value="Temporary">Temporary</option>
                                <option value="Permanent">Permanent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">From</label>
                            <input type="date" class="form-control" id="c2">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">To</label>
                            <input type="date" class="form-control" id="d2">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">No of Year(Fraction Allowed)</label>
                            <input type="text" class="form-control" id="e2">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Name of Organization</label>
                            <input type="text" class="form-control" id="f2">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="g2">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uforma5">Update</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>