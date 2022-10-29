<?php

$conexion = mysqli_connect("localhost", "root", "", "bd") or
die("Problemas con la conexión");


  if (isset($_GET['id'])){
    $id= $_GET['id'];
    $query= "SELECT * FROM banco WHERE id = $id";
    $result = mysqli_query($conexion,$query);
    if(mysqli_num_rows($result)==1){
      $row= mysqli_fetch_array($result);
      $nombre=$row['nombre'];
      $apellido=$row['apellido'];
      $tipoident=$row['tipoident'];
      $numid=$row['numid'];
      $telefono=$row['telefono'];
      $direccion=$row['direccion'];
      $email=$row['email'];
    }
  }
  if(isset($_POST['update'])){
    $id= $_GET['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $tipoident=$_POST['tipoident'];
    $numid=$_POST['numid'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $query="UPDATE banco SET nombre='$nombre',apellido='$apellido',tipoident=$tipoident,numid=$numid,telefono=$telefono,direccion='$direccion',email='$email'  where id = $id ";
    $result = mysqli_query($conexion,$query);
    header("location: personal_portada.php");
  }
  ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
        <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post">
        <h3>Actualizar contacto</h3>
        <br>
          <div class=" form-group">
          <h5 style="color:#a72833;"><b> Nuevo nombre:</b></H5><input type="text" name="nombre" id="" value="<?php echo $nombre; ?>"class="form-control" placeholder="Actualiza el nombre del local">
            <br>
            <h5 style="color:#a72833;"> <b>Nuevo apellido:</b> </H5><input type="text" name="apellido" id="" value="<?php echo $apellido; ?>"class="form-control" placeholder="Actualiza el tipo de local">
            <br>
            <h5 style="color:#a72833;"> <b>Nuevo tipo id:</b> </H5><input type="text" name="tipoident" id="" value="<?php echo $tipoident; ?>"class="form-control" placeholder="Actualiza la direccion">
            <br>
            <h5 style="color:#a72833;"><b>Nuevo num id:</b> </H5><input type="number" name="numid" id="" value="<?php echo $numid; ?>"class="form-control" placeholder="Actualiza el codigo de camara y comercio">
            <br>
            <h5 style="color:#a72833;"><b> Nuevo telefono:</b></H5><input type="text" name="telefono" id="" value="<?php echo $telefono; ?>"class="form-control" placeholder="Actualiza el nombre del local">
            <br>
            <h5 style="color:#a72833;"><b> Nueva direccion:</b> </H5><input type="text" name="direccion" id="" value="<?php echo $direccion; ?>"class="form-control" placeholder="Actualiza el tipo de local">
            <br>
            <h5 style="color:#a72833;"> <b>Nuevo email:</b> </H5><input type="text" name="email" id="" value="<?php echo $email; ?>"class="form-control" placeholder="Actualiza la direccion">
            <br>
          </div>
          <button type="submit" class="btn btn " style= "background-color:#a72833; color:white" name="update">Actualizar</button>
          <br>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        </form>
      </div>
    </div>  
  </div>
</div>
