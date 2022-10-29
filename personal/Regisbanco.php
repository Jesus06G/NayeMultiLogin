<?php

      $conexion = mysqli_connect("localhost", "root", "", "bd") or
      die("Problemas con la conexión");
  
      mysqli_query($conexion, "insert into banco(nombre,apellido, tipoident, numid, telefono, direccion, email) values 
        ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[tipoident]',$_REQUEST[numid],$_REQUEST[telefono],'$_REQUEST[direccion]','$_REQUEST[email]')")
        or die("Problemas en el select" . mysqli_error($conexion));
    
      mysqli_close($conexion);
    
      echo "Ingreso Correctamente.";
      ?>
      <?php

$conexion = mysqli_connect("localhost", "root", "", "bd") or
die("Problemas con la conexión");
header("location: personal_portada.php");


  $registros = mysqli_query($conexion, "select * from banco") or
    die("Problemas en el select:" . mysqli_error($conexion));  ?>
    <table class="table table-striped display" id="tabla1">
    <thead>
      <tr>
      <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>tipoident</th>
        <th>Numero de Identificacion</th>
        <th>telefono</th>
        <th>direccion</th>
        <th>email</th>
        <th>accion</th>
        

        
      </tr>
    </thead>
    <tbody>
    <tr> 
      <?php
  while ($reg = mysqli_fetch_array($registros)) {?> 
   
   <td><?php echo $reg['id']; ?></td> 
    <td><?php echo  $reg['nombre']; ?></td>
    <td><?php echo $reg['apellido'] ; ?></td>
  
    
    <td><?php 
    switch ($reg['tipoident']) {
      case 1:
        echo "Cédula de Ciudadanía";
        break;
      case 2:
        echo "Tarjeta de identidad";
        break;
      case 3:
        echo "Cédula de extrajenría";
        break;
        case 4:
          echo "Pasaporte";
         break;
    }?></td>
    <td><?php echo $reg['numid'] ; ?></td>
    <td><?php echo $reg['telefono'] ; ?></td>
    <td><?php echo $reg['direccion'] ; ?></td>
    <td><?php echo $reg['email'] ; ?></td>
    <td><button type="submit" class="btn btn-success">Editar</button></td><br>
    <td><button type="submit" class="btn btn-danger" ><a href="borrar.php?id=<?php echo $reg['id']?>">Eliminar </a></button></td><br>
  </tr>
 
    <?php  }  ?> 
     </tbody>
     </table>
     <?php
    mysqli_close($conexion);?>
<script>$(document).ready( function () {
        $('#tabla1').DataTable();
    } );</script>
