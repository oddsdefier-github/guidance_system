<?php
session_start();
?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#"><h2>Hello, <?php echo $_SESSION["user_name"]?></h2> </a>
        </nav>