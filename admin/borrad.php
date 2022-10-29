
<?php
  $conexion = mysqli_connect("buojhg5y2w2ultallhhc-mysql.services.clever-cloud.com", "uugunhd73cgyw7jr", "eZ2WtjBrsUn9iloTHA2x", "buojhg5y2w2ultallhhc") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id from mainlogin
                        where id='$_GET[id]'") or die("Problemas en el select:" . mysqli_error($conexion));

    mysqli_query($conexion, "delete from mainlogin where id='$_GET[id]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
      header("location: admin_portada.php");
  
  mysqli_close($conexion);
  ?>