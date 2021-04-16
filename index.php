<?php
require 'session_variable.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php
    include 'header.php';
    include 'css.php';
    $dashboard = "active";
    ?>
</head>

<body id="app-container" class="menu-default show-spinner">
    <?php 
    include 'menu-top.php';
    include 'menu-left.php';
    ?>

    <main>
        <div class="container-fluid">
            <?php include 'index-info.php';?>  
            
        </div>

    </main>

    <?php
    include 'footer.php';
    include 'scripts.php';
    ?>
</body>

</html>