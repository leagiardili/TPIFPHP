<!-- Header -->
<?php  
  include 'header.php';
  include 'db.php';
?>
<h2 class="text-center">Datos del Usuario</h2>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
            <th  scope="col">Id</th>
            <th  scope="col">Apellido</th>
            <th  scope="col">Nombre</th>
            <th  scope="col">DNI</th>
            <th  scope="col">Email</th>
            <th  scope="col">Teléfono</th>
            <th  scope="col">Seniority</th>
            <th  scope="col">Password</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM usuarios WHERE idUsuario = {$userid} ";  
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
                    $usrPass        = $row['usrPassword']; 
                    echo "<tr >";
                    echo " <td > {$id} </td>";
                    echo " <td > {$usrApellido}</td>";
                    echo " <td > {$usrNombre}</td>";
                    echo " <td > {$usrDNI}</td>";
                    echo " <td > {$usrEmail}</td>";
                    echo " <td > {$usrTelefono}</td>";
                    echo " <td > {$usrSeniority} </td>";
                    echo " <td > {$usrPass} </td>";
                    echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="browse.php" class="btn btn-warning mt-5"> Volver </a>
  </div>
  <br>
<!-- Footer -->
<?php include "footer.php" ?>