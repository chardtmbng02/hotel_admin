<?php
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../Unauthorized.php');
	exit;
}
?>

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted"> Copyright &copy; Bay-Ler View Hotel 2023</div>
        </div>
    </div>
</footer>