<?php

if (isset($_SESSION['message']))
 {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h4><?= $_SESSION['message'];?></h4>
        </div>
        
    <?php
    unset($_SESSION['message']);
}
?>