<?php
require './../conn/conn.php';
require './../session_variable.php';
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
            <?php include 'index-info.php';?>  

        </div>

    </main>

    <?php
    include $_SERVER["DOCUMENT_ROOT"] . '/footer.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/scripts.php';
    ?>
    <script type="text/javascript">
        $('#modalEditServices').on('show.bs.modal', function (e) {
          var button = $(e.relatedTarget)
          var recipient = button.data('whatever')
          $.ajax({
            url: './../controller/edit_service_ui.php',
            type: 'POST',
            data: 'sId='+recipient,
            success: function(res){
                $("#editServiceModalBody").html(res);
            }
        })
      });

        $('#modalAddServices').on('hidden.bs.modal', function (e) {
          $(".father-service").remove();
        })

        function addSubServFunc(sId) {
            $("#modalAddServices").modal("show");
            $("#formAddServiceRow").after(`<input typr="text" class="father-service" name="fatherService" value="${sId}" id="${sId}" />`)
        }
    </script>
</body>

</html>