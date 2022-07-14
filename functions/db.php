<?php
$host = 'localhost';  
$user = 'root';   
$pass = 'root';   
$database = 'pifphp2022';   

// estableciendo conexión
  $conn = mysqli_connect($host,$user,$pass,$database);   

 //  error en caso de que no se establezca la conexión 
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


