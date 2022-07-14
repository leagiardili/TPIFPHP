<?php  
  include 'header.php';
  include 'db.php';
?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM usuarios WHERE idUsuario = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id             = $row['idUsuario'];                
          $usrApellido    = $row['usrApellido']; 
          $usrNombre      = $row['usrNombre']; 
          $usrDNI         = $row['usrDNI']; 
          $usrEmail       = $row['usrEmail']; 
          $usrTelefono    = $row['usrTelefono'];
          $usrSeniority   = $row['usrSeniority']; 
          $usrPassword    = $row['usrPassword']; 
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $usrNombre    = $_POST['usrNombre'];
      $usrApellido  = $_POST['usrApellido'];
      $usrDNI       = $_POST['usrDNI'];
      $usrEmail     = $_POST['usrEmail'];
      $usrTelefono  = $_POST['usrTelefono'];
      $usrSeniority = $_POST['usrSeniority'];
      $usrPassword  = $_POST['usrPassword'];
      
      // SQL query update 
      $query = "UPDATE usuarios SET usrNombre = '{$usrNombre}' , usrApellido = '{$usrApellido}' , usrDNI = '{$usrDNI}', usrEmail = '{$usrEmail}', usrTelefono = '{$usrTelefono}', usrSeniority = '{$usrSeniority}', UsrPassword = '{$usrPassword}' WHERE idUsuario = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Usuario Actualizado!')</script>";
    }             
?>  
    <br>
    <div class="container">
      <form action="" method="post">
          <div class="mb-3 row">
              <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="usrNombre" id="UsrName" value="<?php echo $usrNombre  ?>">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Apellido</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="usrApellido" id="UsrApellido" value="<?php echo $usrApellido  ?>">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">DNI</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="usrDNI" id="UsrDNI" value="<?php echo $usrDNI  ?>">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="exampleFormControlInput2" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" class="form-control" name="usrEmail" id="UsrEmail" value="<?php echo $usrEmail  ?>">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Teléfono</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="usrTelefono" id="UsrTelefono" value="<?php echo $usrTelefono  ?>">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Seniority</label>
              <div class="col-sm-10">  
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="usrSeniority" id="inlineRadio1" value="1" <?php echo($usrSeniority== '1') ? 'checked="checked"' : ''; ?>>
                      <label class="form-check-label" for="inlineRadio1">Estudiante</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="usrSeniority" id="inlineRadio2" value="2" <?php echo($usrSeniority== '2') ? 'checked="checked"' : ''; ?>>
                      <label class="form-check-label" for="inlineRadio2">Trainee</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="usrSeniority" id="inlineRadio3" value="3" <?php echo($usrSeniority== '3') ? 'checked="checked"' : ''; ?>>
                      <label class="form-check-label" for="inlineRadio3">Junior</label>
                  </div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" class="form-control" name="usrPassword" id="inputPassword" value="<?php echo $usrPassword  ?>">
              </div>
          </div>
          <div class="form-group">
              <input type="submit"  name="update" class="btn btn-primary mt-2" value="Actualizar">
          </div>
      </form>    
    </div>
    <br>
    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="browse.php" class="btn btn-warning mt-5"> Volver </a>
    </div>
    <br>
<!-- Footer -->
<?php include "footer.php" ?>