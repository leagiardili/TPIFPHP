<?php
    include 'header.html';
    include 'functions/db.php';

    $usrName        = $_POST['UsrName'];
    $usrApellido    = $_POST['UsrApellido'];
    $usrDNI         = $_POST['UsrDNI'];
    $usrEmail       = $_POST['UsrEmail'];
    $usrTelefono   = $_POST['UsrTelefono'];
    $usrSeniority   = $_POST['UsrSeniority'];
    $usrPassword    = $_POST['UsrPassword'];

    if(mysqli_connect_errno()){
        // echo "ERROR!!!";
    } else {
  //      echo "CONNECTION OK";
        $insert = mysqli_query($conn,"INSERT INTO usuarios(usrNombre,usrApellido,usrDNI,usrEmail,usrTelefono,usrSeniority,usrPassword) 
        VALUES('$usrName','$usrApellido','$usrDNI','$usrEmail','$usrTelefono','$usrSeniority','$usrPassword')");
    }

?>

<div class="container">
    <?php
        if(mysqli_connect_errno()){
            echo "ERROR!!!" . "<br>";
        }
            //printf("New record has ID %d.\n", mysqli_insert_id($connect));
        if(mysqli_insert_id($conn)!=""){
            echo "REGISTRO EXITOSO" . "<br>";
        }
    ?>

    <div class="container text-center">
        <a href="index.html" class="btn btn-warning mt-5"> volver </a>
    </div>
    <br>
</div>
<!-- Footer -->
<?php include "footer.html" ?>
    
