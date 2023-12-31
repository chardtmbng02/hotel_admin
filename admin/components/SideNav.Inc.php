<?php
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../Unauthorized.php');
	exit;
}
?>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Quick</div>
            <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Main</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Reservations
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="Rooms.php">Rooms</a>
                    <a class="nav-link" href="Events.php">Events</a>
                </nav>
            </div>

            <a class="nav-link" href="Testimonials.php">
                <div class="sb-nav-link-icon"><i class="fas fa-quote-left"></i></div>
                Testimonials
            </a>

            <div class="sb-sidenav-menu-heading">Others</div>
            <a class="nav-link" href="CommentsSuggest.php">
                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                Comments & Suggestions
            </a>

            <div class="sb-sidenav-menu-heading">Settings</div>
            <a class="nav-link" href="Users.php">
                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                User Accounts
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
     Bay-Ler Admin
    </div>
</nav>