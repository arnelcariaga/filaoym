<?php
require './../session_variable.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php
        include $_SERVER["DOCUMENT_ROOT"] . '/header.php';
        include $_SERVER["DOCUMENT_ROOT"] . '/css.php';
        $queue = "active";
    ?>
</head>

<body id="app-container" class="menu-default show-spinner">
    <?php 
        include $_SERVER["DOCUMENT_ROOT"] . '/menu-top.php';
        include $_SERVER["DOCUMENT_ROOT"] . '/menu-left.php';
    ?>

    <main>
        <div class="container-fluid">
            <?php include 'index-info.php';?>  
                
        </div>

    </main>

    <?php
        include $_SERVER["DOCUMENT_ROOT"] . '/footer.php';
        include $_SERVER["DOCUMENT_ROOT"] . '/scripts.php';
    ?>
</body>

</html>