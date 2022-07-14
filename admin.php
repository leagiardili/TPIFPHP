<?php include 'functions/header.php' ?>
<?php
if(isset($_POST['create'])) 
    {
      $usrName  = $_POST['usrName'];
      $usrPass  = $_POST['usrPass'];
      
     // displaying proper message for the user to see whether the query executed perfectly or not 
          if ($usrName=='admin' and $usrPass=='admin') {
              echo "<script type='text/javascript'>alert('Ingreso!')</script>";
              header("Location: functions/browse.php");
          }

          else { 
                echo "<script type='text/javascript'>alert('Usuario no Registrado')</script>";
              }         
    }
?>
<main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container">
        <br>
        <form action="" method="POST">
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="usrName" id="usrName">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="usrPass" id="inputPassword">
                </div>
            </div>
            <div>
                <input type="submit"  name="create" class="btn btn-primary" value="Ingresar">
                <a href="index.html" id="cancel" name="cancel" class="btn btn-danger">Cancelar</a> 
            </div>
        </form>
        <br>
    </div>
</main>
<!-- Footer -->
<?php include 'functions/footer.php' ?>