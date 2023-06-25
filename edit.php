<?php

session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.php");
  }

require "config.php";

$username = $_SESSION['username'];
$upmail = $_SESSION['emailaddress'];

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $address = $_POST['address'];

    $dip = $_POST['dip_year'];
    $engcoll = $_POST['engcoll'];
    $engloc = $_POST['engloc'];
    $engbranch = $_POST['engbranch'];
    $engyear = $_POST['eng_year'];

    $pname = $_POST['pcom_name'];
    $ploc = $_POST['pcom_loc'];
    $psal = $_POST['pcom_salary'];
    $pdes = $_POST['pcom_desig'];
    $ptech = $_POST['pcom_tech'];
    $cname = $_POST['com_name'];
    $cloc = $_POST['com_loc'];
    $csal = $_POST['com_salary'];
    $cdes = $_POST['com_desig'];
    $ctech = $_POST['com_tech'];
    $linked = $_POST['linkedin'];
    $git = $_POST['github'];

    $sql = "UPDATE students_data SET Name = '$name', Email = '$email', Phone_num = '$phno', address = '$address', Dip_year = '$dip', Eng_col = '$engcoll', Eng_loc = '$engloc', Eng_branch = '$engbranch', Eng_year = '$engyear', pcom_name = '$pname', pcom_loc = '$ploc', pcom_salary = '$psal', pcom_desig = '$pdes', pcom_tech = '$ptech', com_name = '$cname', com_loc = '$cloc', com_salary = '$csal', com_desig = '$cdes', com_tech = '$ctech', linkedin = '$linked', github = '$git' WHERE upload_mail = '$upmail'";

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "<script>alert('Data Updated Successfully!')</script>";
        echo "<script>window.location.href = 'dashboard.php'</script>";
    } else {
        echo "<script>alert('Something went Wrong!')</script>";
    }
}

if (isset($_POST['cancel'])) {
    header('Location: dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

    <title>GPTM - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GPTM</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link" href="upload.php">
                    <i class="fas fa-fw fa-upload"></i>
                    <span>Upload Data</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="modify.php">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Modify Data</span></a>
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


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

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
                        <h1 class="h3 mb-0 text-gray-800">Edit Your Data</h1>
                    </div>

                    <?php

                    $sql3 = "SELECT * FROM students_data WHERE upload_mail = '$upmail'";
                    $result3 = mysqli_query($link, $sql3);
                    $record = mysqli_fetch_assoc($result3);

                    ?>

                    <div class="row">
                        <form method="post">
                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Update Your Experienced Informations
                                        </h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body text-center">
                                        <div class="col-9 text-center mx-auto mt-3 text-dark">
                                            <h3 class="mt-4 font-weight-bold">Hello <?php echo $username ?>!, Great to See You</h3>
                                            <form action="" method="post">
                                                <div class="mt-4 text-left font-weight-bold">
                                                    <p>Basic Information</p>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="name" value="<?php echo $record['Name'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="number" name="phno" value="<?php echo $record['Phone_num'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="email" name="email" value="<?php echo $record['Email'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="address" value="<?php echo $record['address'] ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-2 text-left font-weight-bold">
                                                    <p>Education Information</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="dip_year" value="<?php echo $record['Dip_year'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="engcoll" value="<?php echo $record['Eng_col'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="engloc" value="<?php echo $record['Eng_loc'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="engbranch" value="<?php echo $record['Eng_branch'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="eng_year" value="<?php echo $record['Eng_year'] ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-2 text-left font-weight-bold">
                                                    <p>Present Company Informations</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="pcom_name" value="<?php echo $record['pcom_name'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="pcom_loc" value="<?php echo $record['pcom_loc'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="number" name="pcom_salary" value="<?php echo $record['pcom_salary'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="pcom_desig" value="<?php echo $record['pcom_desig'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="pcom_tech" value="<?php echo $record['pcom_tech'] ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-2 text-left font-weight-bold">
                                                    <p>Experience Informations</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="com_name" value="<?php echo $record['com_name'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="com_loc" value="<?php echo $record['com_loc'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="number" name="com_salary" value="<?php echo $record['com_salary'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="com_desig" value="<?php echo $record['com_desig'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="com_tech" value="<?php echo $record['com_tech'] ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-2 text-left font-weight-bold">
                                                    <p>Social Media Handles</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="linkedin" value="<?php echo $record['linkedin'] ?>" class="form-control">
                                                    </div>
                                                    <div class="col-6 mb-4">
                                                        <input id="verify" type="text" name="github" value="<?php echo $record['github'] ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mb-4 mt-3">
                                                    <button type="submit" name="update" class="btn btn-outline-primary mr-3">Update</button>
                                                    <button type="submit" name="cancel" class="btn btn-outline-danger ml-3">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Nithin Kumar K, All Rights Reserved 2023</span>
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
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>