<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mialvarado</title>

    <!-- Extenciones -->
    <?php include('principal/extenciones.php'); ?>

    <!--Este es para crear la ruta para los estilos-->
    <link rel="stylesheet" href="css/styles.css">

</head>

<!-- nav -->
<?php include('principal/nav.php'); ?>

<body>
    <!--Aqui metemos el encabezado-->
    <header>

     <!-- La nav toda wapa-->
 <nav id="menu" class="navbar navbar-expand-lg navbar-light">
     <a class="navbar-brand" href="index.php" style="color: #ffff;"><b>Mi Alvarado</b></a>

     <!-- No se para que sirve este cacho de codigo -->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <!-------------------------------------------------------------------------------------------------------->

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="index.php" style="color: #ffff;">Inicio<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#" style="color: #ffff;">Contactos</a>
             </li>
             <!-- Este es la que despeja la cajita de opciones -->
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffff;">AlvaraKejas</a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                     <form class="form-horizontal" name="formUser"><a class="dropdown-item" href=" " data-toggle="modal" data-target="#myModal">Iniciar Sesion</a></form>
                     <!-- ------------------------------------------------------------------------------------ -->
                     <form class="form-horizontal" name="formUser"><a class="dropdown-item" data-toggle="modal" data-target="#myModal2">Registro</a></form>
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
        <div class="wave" style="height: 200px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C120.48,185.03 276.80,-32.06 500.00,49.98 L507.62,160.36 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"></path>
            </svg>
        </div>

    </header>

    <!-- Empezamos a darle forma al cuerpo -->
    <section>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ipsum vero, dolore hic amet adipisci architecto, unde quam eaque harum esse voluptatum tempore facere cum perspiciatis! Nihil ratione odio consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aspernatur officia accusantium eos totam hic enim neque laboriosam deleniti assumenda amet, vero voluptate consequuntur velit laudantium ab fugiat cupiditate vitae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur neque omnis nemo libero amet, distinctio porro harum est a. At velit neque eos ipsum assumenda rem eaque libero quas dolore! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in corrupti hic adipisci odio quibusdam qui nobis nam itaque, tempora ratione facilis illum accusantium molestiae sequi ab quas omnis! Expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto tempora exercitationem blanditiis officiis explicabo earum dolorem, soluta doloremque labore laudantium repellendus impedit quaerat voluptatum repellat illo eligendi maxime adipisci ab. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis commodi iusto maxime doloremque. Error labore quos culpa dicta, dignissimos libero quibusdam neque velit corporis, incidunt ratione tenetur deleniti accusamus quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vero veritatis ut dolorem corrupti sequi alias, necessitatibus, beatae maiores assumenda nemo quos mollitia quibusdam dolor aliquam. Adipisci, earum architecto? Veritatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam laudantium veritatis esse odit fugit labore numquam. In, quas minima! Nobis asperiores explicabo ducimus laudantium id, aliquam illum fugiat error optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quae ducimus non sequi repellat laboriosam aliquid. Corporis velit quaerat odio commodi ut nostrum repellendus fugit libero exercitationem, perspiciatis recusandae doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti porro, numquam cumque velit tempore obcaecati ipsam recusandae eum reprehenderit molestias facilis nostrum nisi. Ducimus rerum amet, consequatur perspiciatis fugiat modi?</p>
        </div>

    </section>

    <center>
        <section>
            <!-- Estas madres son lo de las imagenes que puedes cliquear para quue te lleve a alguna otra pagina -->
            <div class="col-8">
                <div class="card-deck">
                    <a href="google.com">
                        <div class="card">
                            <img src="imagenes/historia.jpeg" class="card-img-top" alt="...">
                            <div class="capa">
                                <h2>Historia</h2>
                            </div>
                        </div>
                    </a>


                    <div class="card">
                        <img src="imagenes/festividades.jpeg" class="card-img-top" alt="...">
                        <div class="capa">
                            <h2>Festividades</h2>
                        </div>
                    </div>


                    <div class="card">
                        <img src="imagenes/cultura.jpeg" class="card-img-top" alt="...">
                        <div class="capa">
                            <h2>Cultura</h2>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </center>
    <br><br><br>

    <!-- Modal Iniciar Sesion-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Clase contenedora del formulario dentro del modal -->
                <div class="modal-body">
                    <center>
                        <h1 class="h2s" style="color: #ffff;">Iniciar Sesión</h1>
                        <img class="img-container" src="imagenes/login.svg" style="height: 100px;" alt="">
                        <br><br>
                        <form>
                            <div class="form-group1">
                                <input type="email" required>
                                <label class="lblC" for="exampleInputEmail1"><span class="stxt">Correo</span></label>

                            </div>

                            <div class="form-group2">
                                <input type="password" required>
                                <label class="lblC" for="exampleInputPassword1"><span class="stxt">Contraseña</span></label>
                            </div>
                            <br>
                            <div>
                                <button type="button" class="btn btn-outline-light">Enviar</button>
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <br><br>
                                <p class="p-container">¿No tienes cuenta? <a href="" style="color: #ffff;" data-target="#myModal2" data-toggle="modal">Registrate</a></p>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Registro-->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Clase contenedora del formulario dentro del modal -->
                <div class="modal-body">
                    <center>
                        <h1 class="h1" style="color: #ffff;">Registro</h1>
                        <img class="img-container" src="imagenes/verify.png" style="height: 100px;" alt="">
                        <br><br>
                        <!-- Aqui se pone estas cosa para hacer la coneccion a la base de dartos -->
                        <form action="registro.php" name="" method="POST">

                            <div class="form-group0">
                                <input type="text" required>
                                <label class="lblC" for="exampleInputEmail1" name="nombre"><span class="stxt">Nombre</span></label>

                            </div>

                            <div class="form-group1">
                                <input type="email" required>
                                <label class="lblC" for="exampleInputEmail1" name="correo"><span class="stxt">Correo</span></label>

                            </div>

                            <div class="form-group2">
                                <input type="password" required>
                                <label class="lblC" for="exampleInputPassword1" name="contraseña"><span class="stxt">Contraseña</span></label>
                            </div>

                            <div class="form-group3">
                                <input type="password" required>
                                <label class="lblC" for="exampleInputPassword1" name="conficontra"><span class="stxt">Confirmar Contraseña</span></label>
                            </div>
                            <br>
                            <div action_page="./principal/registro.php" ;>
                                <button id="enviar" type="button" class="btn btn-outline-light">Enviar</button>
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <br><br>
                                <p class="p-container">¿Ya tienes cuenta? <a href="" style="color: #ffff;" data-target="#myModal" data-toggle="modal">Iniciar Sesion</a></p>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- Fooder -->
    <?php include('principal/foother.php'); ?>

</body>


<!-- Librerias para boostrap js jquery -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Esto es la condicional para que la nav se ponga transparente y viceversa -->
<script>
    $(window).scroll(function() {
        if ($("#menu").offset().top > 350) {
            $("#menu").addClass("bcolor");
        } else {
            $("#menu").removeClass("bcolor");
        }
    });
</script>

<script>
    $(window).scroll(function() {
        if ($("#menu").offset().top > 350) {
            $("#menu").addClass("navop");
        } else {
            $("#menu").removeClass("navop");
        }
    });
</script>

</html>