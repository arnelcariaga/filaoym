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
    $profile = "active";
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
        $().ready(function() {
            $("#editProfileForm").validate({
                rules: {
                    name: { required: true},
                    pass: { required: false},
                    confirmPass: { required:false, equalTo: '#pass'}
                },
                messages: {
                    name: "El campo es obligatorio.",
                    confirmPass: { equalTo: "Las contrase&ntilde;as no coinciden"}
                }
            });
        });

        function showPreview(objFileInput) {
            if (objFileInput.files[0]) {
                var fileReader = new FileReader();
                fileReader.onload = function (e) {
                    $("#imgProfile").attr("src", e.target.result);
                }
                fileReader.readAsDataURL(objFileInput.files[0]);
            }
        }

        $("#btnEditUser").on("click", function(){
            var formEditUserValid = $("#editProfileForm").valid();

            if (formEditUserValid) {
                var fd = new FormData();

                var files = $("#file")[0].files[0],
                inputName = $("#inputName"),
                inputPass = $("#pass");

                fd.append('file', files);
                fd.append('inputName', inputName.val());
                fd.append('inputPass', inputPass.val());

                $.ajax({
                    url: './../controller/edit_user_profile.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if (response == "Bien") {
                            window.location.href = '/profile';
                        }else{
                            alert("Hubo un error, intente de nuevo")
                        }
                    },
                });
            }


        })
    </script>
</body>

</html>