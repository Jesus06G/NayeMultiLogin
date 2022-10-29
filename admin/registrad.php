<?php



$conexion = mysqli_connect("buojhg5y2w2ultallhhc-mysql.services.clever-cloud.com", "uugunhd73cgyw7jr", "eZ2WtjBrsUn9iloTHA2x", "buojhg5y2w2ultallhhc") or
die("Problemas con la conexión");

$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['username'];
$role= $_POST['role'];

  
      mysqli_query($conexion, "insert into mainlogin( username, email, password, role) values 
        ($username,$email,$password,$role)")
        or die("Problemas en el select" . mysqli_error($conexion));

        header("location: admin_portada.php");
      mysqli_close($conexion);     
      ?>
  