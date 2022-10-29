<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Multiusuarios PHP MySQL: Niveles de Usuarios</title>
		
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css</script>
<script>//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js</script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    	    
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
.oondex{
  background-image: url(back.jpg);
    background-size: cover; 
    position: relative;

}

.hero-text {
    text-align: center;
    position: absolute;
    top: 1400%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  .bg-success {
    background-color: #a72833!important;
}
.text-primary{
  color: #a72833 !important;
}

.banc{
  background-image: url(../bdm/images/back.jpg);
}
.nav-link{
    color: white;
}
.lll{
  color: #a72833;
  float: right;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
</head>
<nav class="oondex">
	<body >
<?php include("../header.php");?>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		 
			<center>
				<h1>Pagina Administrativa</h1>
				
				<h3>
				<?php
				session_start();

				if(!isset($_SESSION['admin_login']))	
				{
					header("location: ../index.php");  
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../personal/personal_portada.php");	
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../usuarios/usuarios_portada.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>
					Bienvenido,
				<?php
						echo $_SESSION['admin_login'];
				}
				?>
				</h3>
					
			</center>
            <hr>
		</div>
		
		<br><br><br>

		


		<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <button type="button" class=" lll btn btn" data-toggle="modal" data-target="#myModal1" i class="fa-solid fa-file-circle-plus" style="color:#a72833;" ></i >Registrar</button>
                           <h4 style=color:white;> <b> Panel de usuarios </b> </h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tab1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="4%">ID</th>
                                            <th width="18%">Usuario</th>
                                            <th width="24%">Email</th>
                                            <th width="19%">Rol</th>
                                            <th width="24%">Password</th>
											<th colspan="2">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									require_once '../DBconect.php';
									$select_stmt=$db->prepare("SELECT id,username,email,role FROM mainlogin");
									$select_stmt->execute();
									
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["username"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["role"]; ?></td>
                                            <td>*******</td>
											<td width="4%"><a  data-toggle="modal" data-target="#myModal2" href="edit.php?id=<?php  echo $row['id'] ?>"><button class="btn btn-success" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar </button></td></a>
											<td width="7%"><a href="borrad.php?id=<?php  echo $row['id'] ?>"> <button class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span> Eliminar</button></td></a>
									<?php 
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
		
	</div>
			
	</div>


  <!--MODAL INICIA-->
  <div class="container">
  
  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">REGISTRAR USUARIO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="usuario">
  <h2>BANCO</h2>
  <form action="registrad.php" method="post">
    <div class="form-group">
       <label for="username" class="text-primary">Usuario</label>
      <input type="text" class="form-control" id="" placeholder="Digite su nombre de usuario" name="username">
    </div>
    <div class="form-group">
    <label for="Apellido" class="text-primary">Email</label>
    <input type="email" class="form-c/ontrol" id="" placeholder="Digite su correo electronico" name="email">
    </div>
    <div>
    <label for="role" class="text-primary">Rol</label>
    <select name="role" id="">
        <option value="usuarios">usuarios</option>
        <option value="personal">personal</option>
    </select>
    </div>
    <div class="form-group">
        <label for="password" class="text-primary">Digite su contraseña</label>
        <input type="password" class="form-control" id="" placeholder="ingrese su numero de identificacion" name="password">
    </div>
    <button type="submit" class="btn btn-success" >Registrar</button>
  </form>
</div> 
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!--MODAL INICIA-->
<div class="container">
  
  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ACTUALIZAR USUARIO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="usuario">
  <h2>BANCO</h2>
  <form action="edit.php" method="post">
    <div class="form-group">
       <label for="username" class="text-primary">Usuario</label>
      <input type="text" class="form-control" id=""  name="username">
    </div>
    <div class="form-group">
    <label for="Apellido" class="text-primary">Email</label>
    <input type="email" class="form-c/ontrol" id=""  name="email">
    </div>
    <div class="form-group">
        <label for="password" class="text-primary">Digite su contraseña</label>
        <input type="password" class="form-control" id=""  name="password">
    </div>
    <button type="submit" class="btn btn-success" >Registrar</button>
  </form>
</div> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




	</body>
  </nav>
</html>