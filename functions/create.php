<?php  
    include 'header.php';
    include 'db.php'; ?>
<?php 
  if(isset($_POST['create'])) 
    {
      $usrNombre    = $_POST['usrNombre'];
      $usrApellido  = $_POST['usrApellido'];
      $usrDNI       = $_POST['usrDNI'];
      $usrEmail     = $_POST['usrEmail'];
      $usrTelefono  = $_POST['usrTelefono'];
      $usrSeniority = $_POST['usrSeniority'];
      $usrPassword  = $_POST['usrPassword'];
      
        // SQL query to insert user data into the users table
        $query  = "INSERT INTO usuarios(usrNombre,usrApellido,usrDNI,usrEmail,usrTelefono,usrSeniority,usrPassword) 
        VALUES('$usrNombre','$usrApellido','$usrDNI','$usrEmail','$usrTelefono','$usrSeniority','$usrPassword')";
//        $query= "INSERT INTO usuarios(usrname, email, password) VALUES('{$user}','{$email}','{$pass}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "No se pudo agregar el registro ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Usuario agregado!')</script>";
              }         
    }
?>
<main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container">
        <br>
        <form action="" method="POST">
            
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="usrNombre" id="UsrName" placeholder="Ingrese el Nombre">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="usrApellido" id="UsrApellido" placeholder="Ingrese el Apellido">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">DNI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="usrDNI" id="UsrDNI" placeholder="Ingrese el Nro de DNI sin puntos">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlInput2" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="usrEmail" id="UsrEmail" placeholder="name@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="usrTelefono" id="UsrTelefono" placeholder="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Seniority</label>
                <div class="col-sm-10">  
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="usrSeniority" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Estudiante</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="usrSeniority" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Trainee</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="usrSeniority" id="inlineRadio3" value="3">
                         <label class="form-check-label" for="inlineRadio3">Junior</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="usrPassword" id="inputPassword">
                </div>
            </div>
            <div class="form-group">
                <input type="submit"  name="create" class="btn btn-primary mt-2" value="Agregar">
            </div>
        </form>
        <div class="container text-center mt-5">
            <a href="browse.php" class="btn btn-warning mt-5"> Volver </a>
        </div>
        <br>
    </div>
</main>
<!-- Footer -->
<?php include "footer.php" ?>