<?php
 require '../php/key.php';
?>
<!Doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src=''></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="images/<?php echo $image;?>" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name"><?php echo 'Welcome , '.$contest_id;?></span></a>
                    <div class="nav_list"> <a href="" class="nav_link active" target="myFrame"> <i
                                class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a
                            href="" class="nav_link" target="myFrame"> <i class='bx bx-collection nav_icon'></i> <span
                                class="nav_name">Marks</span> </a> <a href="" class="nav_link" target="myFrame"> <i
                                class='bx bx-time nav_icon'></i>
                            <span class="nav_name">Timetable</span>
                    </div> <a href="login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                            class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        <div class="height-100 bg-light">
            <iframe src="members.php" name="myFrame"></iframe>
        </div>
        <script type='text/javascript'
                src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
            <script src='../js/dashboard.js'>
            </script>
    </body>

</html>