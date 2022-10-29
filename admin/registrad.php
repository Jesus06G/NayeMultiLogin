<?php

$conexion = mysqli_connect("buojhg5y2w2ultallhhc-mysql.services.clever-cloud.com", "uugunhd73cgyw7jr", "eZ2WtjBrsUn9iloTHA2x", "buojhg5y2w2ultallhhc") or
die("Problemas con la conexión");
  
      mysqli_query($conexion, "insert into mainlogin(id, username, email, password, role) values 
        ('$_REQUEST[id]','$_REQUEST[username]','$_REQUEST[email]',$_REQUEST[password],'$_REQUEST[role]')")
        or die("Problemas en el select" . mysqli_error($conexion));
    
      mysqli_close($conexion);
    
      echo "Ingreso Correctamente.";
      
header("location: admin_portada.php");
      ?>
  