<?php
require './../conn/conn.php';
require './../session_variable.php';
$service_name = $_GET['sN'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include $_SERVER["DOCUMENT_ROOT"] . '/header.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/css.php';
    
    $config = "active";
    ?> 
</head>

<body id="app-container" class="menu-default show-spinner">
    <?php 
    include $_SERVER["DOCUMENT_ROOT"] . '/menu-top.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/menu-left.php';
    ?>

    <main>
        <div class="container-fluid">
            <?php include 'servicios-info.php';?>
        </div>

    </main>

    <?php
    include $_SERVER["DOCUMENT_ROOT"] . '/footer.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/scripts.php';
    ?>
    <script type="text/javascript">
        $('#modalEditSubServices').on('show.bs.modal', function (e) {
          var button = $(e.relatedTarget)
          var recipient = button.data('whatever');
          var sSId = button.data("ssid");
          $.ajax({
            url: './../controller/edit_sub_service_ui.php',
            type: 'POST',
            data: 'SsId='+recipient+'&sSId='+sSId+'&sN='+'<?php echo $service_name; ?>',
            success: function(res){
                $("#editSubServiceModalBody").html(res);
            }
        })
      });
  </script>
</body>

</html>