
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../Unauthorized.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Testimonials | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Top Navigation Bar -->
    <?php include('./components/TopNav.Inc.php'); ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- Side Menu Section-->
            <?php include('./components/SideNav.Inc.php'); ?>
        </div>
        <div id="layoutSidenav_content">
            <!-- Main Content Section-->
            <main>
                <div class="container-fluid px-4">
                    <h3>Testimonials</h3>
                </div>
            </main>
            <!-- Footer Section -->
            <?php include('./components/Footer.Inc.php'); ?>
        </div>
    </div>
    <?php include('./components/ExternalJS.Inc.php'); ?>
</body>

</html>