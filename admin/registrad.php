<?php

$conexion = mysqli_connect("buojhg5y2w2ultallhhc-mysql.services.clever-cloud.com", "uugunhd73cgyw7jr", "eZ2WtjBrsUn9iloTHA2x", "buojhg5y2w2ultallhhc") or
die("Problemas con la conexión");
  
      mysqli_query($conexion, "insert into mainlogin(id, username, email, password, role) values 
        ('$_REQUEST[id]','$_REQUEST[username]','$_REQUEST[email]',$_REQUEST[password],'$_REQUEST[role]')")
        or die("Problemas en el select" . mysqli_error($conexion));
    
      mysqli_close($conexion);
    
      echo "Ingreso Correctamente.";
      ?>
      <?php

$conexion = mysqli_connect("localhost", "root", "", "bd") or
die("Problemas con la conexión");

header("location: admin_portada.php");

  $registros = mysqli_query($conexion, "select * from mainlogin") or
    die("Problemas en el select:" . mysqli_error($conexion));  ?>
    <table class="table table-striped display" id="tabla1">
    <thead>
      <tr>
      <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>role</th>
        

        
      </tr>
    </thead>
    <tbody>
    <tr> 
      <?php
  while ($reg = mysqli_fetch_array($registros)) {?> 
   
   <td><?php echo $reg['id']; ?></td> 
    <td><?php echo  $reg['username']; ?></td>
    <td><?php echo $reg['email'] ; ?></td>
  
    
    <td><?php 
    switch ($reg['role']) {
      case "usuarios":
        echo "usuarios";
        break;
      case "personal":
        echo "personal";
        break;
    }?></td>
     <td><?php echo $reg['password'] ; ?></td>
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
