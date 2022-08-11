<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <title>Majestic Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container-scroller d-flex align-items-center justify-content-center">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="../assets/images.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                                <h4 class="card-title">General Faculty information</h4>
                                <p class="card-description">
                                    Personal info
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Name of Faculty</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Designation</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="des">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Department</label>
                                            <div class="col-sm-8">
                                                <select class="form-control form-control-lg" id="dep">
                                                    <option selected hidden value="">Select Your Department
                                                    </option>
                                                    <option value="CSE">CSE</option>
                                                    <option value="ECE">ECE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Date of Birth</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" placeholder="dd/mm/yyyy" type="date" id="dob">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Date of Joining in
                                                SITE</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="doj">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Area of
                                                Specialization</label>
                                            <div class="col-sm-8">
                                                <select class="form-control form-control-lg" id="aos">
                                                    <option selected hidden value="">Select Your Specialization
                                                    </option>
                                                    <option value="CSE">CSE</option>
                                                    <option value="ECE">ECE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Phone Number</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Email ID</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Confirm Password</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="cpassword">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row ">
                                                <div class="col-sm-8">
                                                    <button style="color: white;" class="btn btn-primary" onclick="sub()"> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- content-wrapper ends -->
                                <!-- partial:../../partials/_footer.html -->
                                <footer class="footer">
                                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="" target="_blank">Sasi Apprisial </a>2022</span>
                                    </div>
                                </footer>
                                <!-- partial -->
                            </div>
                            <!-- main-panel ends -->
                        </div>
                        <!-- page-body-wrapper ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../middleware/general.js"></script>
</body>

</html>