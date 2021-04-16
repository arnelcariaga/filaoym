<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include $_SERVER["DOCUMENT_ROOT"] . '/header.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/css.php';
    ?>
</head>

<body id="app-container" class="menu-default show-spinner">

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