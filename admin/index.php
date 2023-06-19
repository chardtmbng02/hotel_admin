<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../Login.php');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'gREpR55Z';
$DATABASE_NAME = 'capstone_db';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT user_password, user_fullname FROM user_accounts WHERE user_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($password, $name);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome</title>
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
            <h3><?= $name ?></h3>
            <?php include('./components/SideNav.Inc.php'); ?>
        </div>
        <div id="layoutSidenav_content">
            <!-- Main Content Section-->
            <main>
                <div class="container-fluid px-4">
                
                    <?php include('./components/Home.Inc.php'); ?>
                </div>
            </main>
            <!-- Footer Section -->
            <?php include('./components/Footer.Inc.php'); ?>
        </div>
    </div>
    <?php include('./components/ExternalJS.Inc.php'); ?>
</body>

</html>