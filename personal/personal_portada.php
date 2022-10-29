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

.mm{
  background-image: url(back.jpg);
}
.nav-link{
    color: white;
}
.table{
  margin: auto;
  width: 95%;
  border: 3px red;
  

}
.lll{
  color: #a72833;
  float: right;
}

input[type=text type=number], select {
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

	<body class="mm">
<?php include("../header.php");?>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		 
			<center>
				<h1>Pagina personal</h1>
				
				<h3>
				<?php
				
				session_start();

				if(!isset($_SESSION['personal_login']))	
				{
					header("location: ../index.php");
				}

				if(isset($_SESSION['admin_login']))	
				{
					header("location: ../admin/admin_portada.php");
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../usuarios/usuarios_portada.php");
				}
				
				if(isset($_SESSION['personal_login']))
				{
				?>
					Bienvenido,
				<?php
					echo $_SESSION['personal_login'];
				}
				?>
				</h3>
			</center>
      <div class="but">
			
      </div>
            <hr>
		</div>
		
	</div>
			
	</div>
		
	

	<br>
 
 <?php
 $conexion = mysqli_connect("buojhg5y2w2ultallhhc-mysql.services.clever-cloud.com", "uugunhd73cgyw7jr", "eZ2WtjBrsUn9iloTHA2x", "buojhg5y2w2ultallhhc") or
 die("Problemas con la conexión");


  $registros = mysqli_query($conexion, "select * from banco") or
    die("Problemas en el select:" . mysqli_error($conexion));  ?>

   
               <nav class="table">
               
               <br>
               <br>
               <br>
                <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading background-color: #a72833 ">
                        <button id="lll"type="button" class=" lll btn btn" data-toggle="modal" data-target="#myModal" i class="fa-solid fa-file-circle-plus" style="color:#a72833;" ></i >Registrar</button>
                          <h4 style=color:white;><b> Panel de usuarios</b></h4>  
                          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                        <th width="4%">ID</th>
                                            <th width="18%">Nombre</th>
                                            <th width="24%">Apellido</th>
                                            <th width="19%">Tipo de identificacion</th>
                                            <th width="24%">Telefono</th>
											                      <th colspan="2">Direccion</th>
                                            <th colspan="2">Email</th>
                                        </tr>
                                    </thead>
                                   
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
     
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
    <td><a  data-toggle="modal" data-target="#myModal3"  href="editar.php?id=<?php  echo $reg['id'] ?>"><button type="submit" class="btn btn-success">editar</button></td></a>
    <td><a href="borrar.php?id=<?php  echo $reg['id'] ?>"><button type="submit" class="btn btn" style=" background-color:#a72833; color:white;"  >Eliminar</button></td></a>
  </tr>
 
    <?php  }  ?> 
     </tbody>
     </table>
     <script>
     $(document).ready( function () {
        $('#tabla2').DataTable();
    } );
    </script>
  
  <!--MODAL INICIA-->
    <div class="container">
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">REGISTRO BANCO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="usuario">
  <h2>BANCO</h2>
  <form action="editar.php" method="post">
    <div class="form-group">
       <label for="Nombre" class="text-primary">Nombre:</label>
      <input type="text" class="form-control" id="" placeholder="Digite su nombre" name="nombre">
    </div>
    <div class="form-group">
    <label for="Apellido" class="text-primary">Apellidos:</label>
    <input type="text" class="form-c/ontrol" id="" placeholder="Digite sus apellidos" name="apellido">
    </div>
    <div>
    <label for="Nombre" class="text-primary">Tipo de identificacion:</label>
    <select name="tipoident" id="">
        <option value="1">Cédula de Ciudadanía</option>
        <option value="2">Tarjeta de identidad</option>
        <option value="3">Cédula de extranjería </option>
        <option value="4">Pasaporte</option>
      
    </select>
    </div>
    <div class="form-group">
        <label for="num" class="text-primary">Numero de Identificacion</label>
        <input type="number" class="form-control" id="" placeholder="ingrese su numero de identificacion" name="numid">
    </div>
    <div class="form-group">
        <label for="tel" class="text-primary">Teléfono</label>
        <input type="number" class="form-control" id="" placeholder="ingrese su numero de telefono" name="telefono">
    </div>
    <div class="form-group">
      <label for="email" class="text-primary">Direccion</label>
      <input type="text" class="form-control" id="" placeholder="indique su direccion" name="direccion">
    </div>
    <div class="form-group">
        <label for="tel" class="text-primary">Email</label>
        <input type="Email" class="form-control" id="" placeholder="ingrese su correo electronico" name="email">
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
  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">REGISTRO BANCO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <div class="usuario">
  <h2>BANCO</h2>
  <form action="RegisBanco.php" method="post">
    <div class="form-group">
       <label for="Nombre" class="text-primary"> Nombre:</label>
      <input type="text" class="form-control" id="" placeholder="Digite su nombre" name="nombre">
    </div>
    <div class="form-group">
    <label for="Apellido" class="text-primary">Apellidos:</label>

    <input type="text" class="form-c/ontrol" id="" placeholder="Digite sus apellidos" name="apellido">
    </div>
    <div>
    <label for="Nombre" class="text-primary">Tipo de identificacion:</label>
    <select name="tipoident" id="">
        <option value="1">Cédula de Ciudadanía</option>
        <option value="2">Tarjeta de identidad</option>
        <option value="3">Cédula de extranjería </option>
        <option value="4">Pasaporte</option>
      
    </select>
    </div>
    <div class="form-group">
        <label for="num" class="text-primary">Numero de Identificacion</label>
        <input type="number" class="form-control" id="" placeholder="ingrese su numero de identificacion" name="numid">
    </div>
    <div class="form-group">
        <label for="tel" class="text-primary">Teléfono</label>
        <input type="number" class="form-control" id="" placeholder="ingrese su numero de telefono" name="telefono">
    </div>
    <div class="form-group">
      <label for="email" class="text-primary">Direccion</label>
      <input type="text" class="form-control" id="" placeholder="indique su direccion" name="direccion">
    </div>
    <div class="form-group">
        <label for="tel" class="text-primary">Email</label>
        <input type="Email" class="form-control" id="" placeholder="ingrese su correo electronico" name="email">
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
</html>