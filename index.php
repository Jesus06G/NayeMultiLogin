<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Multiusuarios PHP MySQL: Niveles de Usuarios</title>
		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
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
.ondex{
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

</style>
</head>
<nav class="navbar navbar-light bg-success navbar-static-top  ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li class="nav-item">
      <a class="nav-link" href="index.php">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Registros</a>
    </li>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
 
<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="ondex">
  
  <div class="hero-text">
    <h1 style="font-size:50px">BIENVENIDO</h1>
    <h3>Empieza a registrar!</h3>
    <a href="login.php"> <button> Click aqui</button></a>
  </div>
</body>


