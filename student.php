<?php

require "config.php";

if (isset($_POST['download'])) {

    $select = "SELECT * FROM students_data";
    $select_query = mysqli_query($link, $select);
    $file_path = 'Senior_Students_Data.csv';
    $fp = fopen($file_path, 'w');
    fputcsv($fp, array('StudentID', 'StudentName', 'Email', 'PhoneNumber', 'Address', 'DiplomaPassYear', 'EngineeringCollage', 'EngineeringCollageLocation', 'EngineeringBranch', 'EngineeringPassYear', 'PresentCompanyName', 'PresentCompanyLocation', 'PresentCompanySalary', 'PresentCompanyDesignation', 'PresentCompanyTechnologies', 'CompanyName', 'CompanyLocation', 'CompanySalary', 'CompanyDesignation', 'CompanyTechnologies', 'LinkedINProfile', 'GitHubLink', 'UploaderMail', 'CreatedData'));

    while ($row = mysqli_fetch_array($select_query, MYSQLI_ASSOC)) {
        fputcsv($fp, array_values($row));
    }
    $filename = $file_path;
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
    readfile($filename);
    exit;

}

if (isset($_POST['home'])) {

    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GPTM - Students</title>
    <link rel="icon" type="image/x-icon" href="media/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="assets/mp4/bg.mp4" type="video/mp4" />
    </video>
    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Government Polytechnic, Mirle</h1>
                <p class="mb-5">The Students can Download the Senior Students Data in the CSV Format for the purpose of
                    references.</p>
                <form id="contactForm" method="post">
                    <div class="row input-group-newsletter">
                        <div class="col-auto mb-3">
                            <button class="btn btn-primary" name="download" id="submitButton" type="submit">Download CSV</button>
                        </div>
                        <div class="col-auto mb-3">
                            <button class="btn btn-primary" name="home" type="submit">Return to Home</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>