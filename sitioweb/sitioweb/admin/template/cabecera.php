<?php
ob_start();
?>
<?php
session_start();
    if(!isset($_SESSION['usuario'])){
        header("Location:../index.php");
    }else{

        if($_SESSION['usuario']=="ok"){

            $nombreUsuario=$_SESSION["nombreUsuario"];
            
        }
    }
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   
    <!--Hojas de Estilo -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <!--Hojas de Estilo -->
    <title>Administrador base de datos</title>
</head>
<body>

<?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"?>   

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $url;?> /admin/inicio.php">Administrador base de datos</a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        <a class="nav-link" href="<?php echo $url;?> /admin/inicio.php">Inicio</a>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CRUDS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/clases.php">Clases</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/salones.php">Salones</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/horarios.php">Horarios</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/sesiones.php">Sesiones</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/paquetes.php">Paquetes</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/tarjetas.php">Tarjetas</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/salud.php"> Salud</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/profesores.php"> Profesores</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/alumnos.php">Alumnos</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relaciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/inscripciones.php">Inscripciones</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/compras.php">Compras</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/ofrece.php">Ofrece</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/suscribe.php">Suscribe</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/asignan.php">Asignan</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/dicta.php">Dicta</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/especializa.php"> Especializa</a>
            
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consultas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/filtroAlumno.php">Consulta alumnos</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/filtroProfesor.php">Consulta profesores</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/filtroSalon.php">Consulta salones</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/filtroPaquete.php">Consulta paquetes</a>
            <a class="dropdown-item" href="<?php echo $url;?> /admin/seccion/filtroSesion.php">Consulta sesion</a>
          
        </div>
      </li>
     

        <a class="nav-link" href="<?php echo $url;?> /admin/seccion/cerrar.php"> Cerrar sesion</a>
      
      
    </ul>
  </div>
</nav>

    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Archivos de javascript-->
    
    
        <div class="container">
            <br>
            <div class="row">
                
        