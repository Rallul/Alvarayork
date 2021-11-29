<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mialvarado</title>

    <!-- este es para que se ponga una imagen en la pestaña como tipo logo-->
    <link rel="shortcut icon" href="../imagenes/yayarislogo.png" type="image/x-icon">
    <!--Este es para crear la ruta para los estilos-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--Esta madre es del boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!--Este codigo es para que los iconos funcionen-->
    <script src="https://kit.fontawesome.com/ace0a1e6ef.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--Aqui metemos el encabezado-->
    <header>

        <!-- La nav toda wapa-->
        <nav id="menu" class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php" style="color: #ffff;"><b>Mi Alvarado</b></a>

            <!-- No se para que sirve este cacho de codigo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-------------------------------------------------------------------------------------------------------->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php" style="color: #ffff;">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #ffff;">Contactos</a>
                    </li>
                    <!-- Este es la que despeja la cajita de opciones -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffff;">AlvaraKejas</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <form class="form-horizontal" name="formUser"><a class="dropdown-item" href="../iniciar.php" data-toggle="modal" data-target="#myModal">Iniciar Sesion</a></form>
                            <!-- ------------------------------------------------------------------------------------ -->
                            <form class="form-horizontal" name="formUser"><a class="dropdown-item" href="principal/iniciar.php" data-toggle="modal" data-target="#myModal2">Registro</a></form>
                            <!-- ------------------------------------------------------------------------------------ -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="principal/administrador.php">Administrador</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Puto el que lo lea</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

        <!-- Parte en la que se ponen el titulo y etc -->
        <section>
            <h3 class="slogan" style="color: #ffff; text-align:left;" aling="top"><img class="logo" src="imagenes/Mialvatado.png" height="250px" alt=""> <img class="letras" src="imagenes/AAAAA.png" alt=""></h3>
        </section>

        <!--Este codigo es para la creacion de una wave para el diseño-->
        <div class="wave" style="height: 200px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C120.48,185.03 276.80,-32.06 500.00,49.98 L507.62,160.36 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"></path>
            </svg></div>

    </header>


    <div id="content">
        <h1>Administracion Usuarios</h1>
        <div class="row">
            <br>
            <form class="form-horizontal" name="formUser">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Agregar Usuario</button>
            </form>

            <br>
            <form class="form-horizontal" name="formBusqueda">
                <div class="input-group col-md-4">
                    <div class="input-group-btn">
                        <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
            </form>

            <br>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Nombre completo</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th><span class="glyphicon glyphicon-edit"></span></th>
                        <th><span class="glyphicon glyphicon-trash"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="input" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </button></td>
                        <td><button type="input" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </button></td>
                    </tr>
                </tbody>
            </table>

            <br>
</body>

</html>