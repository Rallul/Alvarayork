<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>MiAlvarado</title>
 <!-- Bootstrap -->
 <link rel="icon" type="image/png" href="./img/MiAlvatado.png" />
 <link rel="stylesheet" href="./css/bootstrap.min.css" >
 <link rel="stylesheet" href="./css/margenes.css" >
 <script src="./controlador/jquery.js"></script>
 <script src="./controlador/bootstrap.min.js"></script>
 <script src="./controlador/angular.min.js"></script>
</head>

<header>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
     </button>  
     <IMG class="navbar-brand" SRC="./img/MIA-1.png"> </IMG>
     <a class="navbar-brand" href=""></a>
    </div>
  <div class="collapse navbar-collapse" id="myNavbar">
   <ul class="nav navbar-nav">
    <li class=""><a href="index.php"><span class="glyphicon glyphicon-home.glyphicon"></span> Inicio</a></li>     
       
    <li class="dropdown">
     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="./AdminUsuarios.php">Administrar usuarios</a></li>
        </ul>
       </li>
   </div>
  </nav>
</header>