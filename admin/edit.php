<?php

$conexion = mysqli_connect("localhost", "root", "", "bd") or
die("Problemas con la conexión");


  if (isset($_GET['id'])){
    $id= $_GET['id'];
    $query= "SELECT * FROM mainlogin WHERE id = $id";
    $result = mysqli_query($conexion,$query);
    if(mysqli_num_rows($result)==1){
      $row= mysqli_fetch_array($result);
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];
      $role=$row['role'];
     
    }
  }
  if(isset($_POST['update'])){
    $id= $_GET['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $query="UPDATE mainlogin SET username='$username',email='$email', password='$password',role='$role'  where id = $id ";
    $result = mysqli_query($conexion,$query);
    header("location: admin_portada.php");
  }
  ?>
  <br><br>

<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-6">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
        
<h4 class="modal-title">ACTUALIZAR USUARIO</h4>
<br>
          <div class=" form-group" >
            <h5 style="font-family: sans-serif; color:#a72833; "><b>Nuevo usuario</b></h5><input type="text" name="username"  id="" value="<?php echo $username; ?>"class="form-control" placeholder="Nuevo nombre de usuario">
            <br>
            <h5 style="color:#a72833;"><b>Nuevo email</b></h5><input type="email" name="email" id="" value="<?php echo $email; ?>"class="form-control" placeholder="Nuevo E-mail">
            <br>
            <h5 style="color:#a72833;"><b>Nueva contraseña</b></h5><input type="text" name="password" id="" value="<?php echo $password; ?>"class="form-control" placeholder="Nueva contraseña">
            <br>
            <h5 style="color:#a72833;"><b>Nuevo role</b></h5><input type="text" name="role" id="" value="<?php echo $role; ?>"class="form-control" placeholder="Nuevo rol">
            <br>
          </div>
          <button type="submit" class="btn btn" style= "background-color:#a72833; color:white"  name="update">Actualizar</button>
        </form>
        <br>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>  
  </div>
</div>
</div>