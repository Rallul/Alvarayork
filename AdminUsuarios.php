<?php  require_once "EncabezadoAdmin.php"; ?>
<script src="./controlador/AdminUsuarios.js"></script>
<body ng-controller="usuariosCTRL">
 <div id="content" >
  <h1>Administracion Usuarios</h1>
  <div class="row">
            <br>
            <form class="form-horizontal" name="formUser">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Agregar Usuario</button>
            </form>
            
            <br>
            <!-- Buscador -->
            <form class="form-horizontal" name="formBusqueda">
            <div class="input-group col-md-6">      
              <div class="input-group-btn">
                <button class="btn btn-info" ng-click = "buscar()" type="submit" ><i class="glyphicon glyphicon-search"></i></button>
             </div>
             <input type="text" class="form-control" ng-model="info.texto" placeholder="Search" name="search">
            </div> 
            </form>
          
            <br>
            <table class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                 <th>Id de Usuario</th>                 
                 <th>Nombre</th>
                 <th>Apellidos</th>
                 <th>Correo</th>
                 <th><span class="glyphicon glyphicon-edit"></span></th>
                 <th><span class="glyphicon glyphicon-trash"></span></th>
                </tr>
              </thead>
              <tbody>
                 <tr ng-repeat="u in usuarios">
                  <td>{{u.Id_Cliente}}</td>
                  <td>{{u.Nombre}}</td>
                  <td>{{u.Apellidos}}</td>
                  <td>{{u.Correo}}</td>
                  <td><button type="input" class="btn btn-success" ng-click="modificar(u)"><span class="glyphicon glyphicon-edit"></span> Editar </button></td>
                  <td><button type="input" class="btn btn-danger" ng-click="eliminar(u)" ><span class="glyphicon glyphicon-trash"></span> Eliminar </button></td>  
                 </tr>
                  
              </tbody>
            </table>
            
            <br>
           
  <!-- Modal Usuario agrega datos a la DB mediante le boton de arriba de la tabla-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alta usuarios</h4>
        </div>
        <div class="modal-body">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Administración Usuarios </h3>
                </div>
                <div class="panel-body">
                   <form class="form-horizontal" name="form" >
                      
                      <div class="form-group">
                      <label for="nombre" class="col-md-2 control-label">Nombre</label>
                      <div class="col-md-6"><input type="text" class="form-control" id="Nombre" ng-model="usuario.Nombre" placeholder="Nombre" required></div>
                      </div>

                      <div class="form-group">
                      <label for="password" class="col-md-2 control-label">Apellidos</label>
                      <div class="col-md-6"><input type="text" class="form-control" id="Apellidos" ng-model="usuario.Apellidos" placeholder="Apellidos" required></div>
                      </div>

                      <div class="form-group">
                      <label for="password" class="col-md-2 control-label">Correo</label>
                      <div class="col-md-6"><input type="text" class="form-control" id="Correo" ng-model="usuario.Correo" placeholder="Correo" required></div>
                      </div>

                      <div class="form-group">
                      <label for="password" class="col-md-2 control-label">Contraseña</label>
                      <div class="col-md-6"><input type="password" class="form-control" id="password" ng-model="usuario.pass" placeholder="Contraseña" required></div>
                      </div>
                         
                      <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-10">
                         <button type="input" ng-click="form.$valid && guardar()" class="btn btn-primary" ><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</button>
                       </div>
                      </div>
                   </form>
                  </div>
               </div>
           </div>       
        <div class="modal-footer">
          <button type="button" id="btnUser" class="btn btn-success" data-dismiss="modal">Cerrar</button>
        </div>  
      </div>
    </div>
  </div>
       <!-- Termina Modal-->

       <!-- Modal Modificar Usuario-->
  <div id="ModUser"  class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar usuario</h4>
        </div>
        <div class="modal-body">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Administración Usuarios </h3>
                </div>
                <div class="panel-body">
                   <form class="form-horizontal" name="formMod" >

                      <div class="form-group">
                      <label for="nombre" class="col-md-2 control-label">Nombre</label>
                      <div class="col-md-6"><input type="text" class="form-control" id="Nombre" ng-model="modUsuario.Nombre" placeholder="Nombre" required></div>
                      </div>

                      <div class="form-group">
                      <label for="password" class="col-md-2 control-label">Apellidos</label>
                      <div class="col-md-6"><input type="text" class="form-control" id="Apellidos" ng-model="usuario.Apellidos" placeholder="Apellidos" required></div>
                      </div>

                      <div class="form-group">
                      <label for="password" class="col-md-2 control-label">Correo</label>
                      <div class="col-md-6"><input type="text" class="form-control" id="Correo" ng-model="usuario.Correo" placeholder="Correo" required></div>
                      </div>

                      <div class="form-group">
                      <label for="password" class="col-md-2 control-label">Contraseña</label>
                      <div class="col-md-6"><input type="password" class="form-control" id="password" ng-model="usuario.pass" placeholder="Contraseña" required></div>
                      </div>

                         
                      <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-10">
                         <button type="input" ng-click="formMod.$valid && actualizar()" class="btn btn-success" ><span class="glyphicon glyphicon-floppy-disk"></span> Modificar</button>
                       </div>
                      </div>
                   </form>
                  </div>
               </div>
           </div>       
        <div class="modal-footer">
          <button type="button" id="btnMod" class="btn btn-success" data-dismiss="modal">Cerrar</button>
        </div>  
      </div>
    </div>
  </div>
       <!-- Termina Modal-->


</div> 
</div>
</body>

<footer class="page-footer">
  <img src="./img/Pie.png" class="img-responsive">
</footer>
</html>