
<?php  
  include 'header.php';
  include 'db.php';
?>
<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];
         $query = "DELETE FROM usuarios WHERE idUsuario = {$userid}"; 
         $delete_query= mysqli_query($conn, $query);
         echo "<script type='text/javascript'>alert('Usuario Eliminado!')</script>";
         header("Location: browse.php");
     }
              ?>

  <!-- Footer -->
<?php include "footer.php" ?>