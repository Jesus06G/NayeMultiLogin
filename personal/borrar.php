
<?php
  $conexion = mysqli_connect("localhost", "root", "", "bd") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id from banco
                        where id='$_GET[id]'") or die("Problemas en el select:" . mysqli_error($conexion));

    mysqli_query($conexion, "delete from banco where id='$_GET[id]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
      header("location: personal_portada.php");
  
  mysqli_close($conexion);
  ?>