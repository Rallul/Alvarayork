var App = angular.module('app',[]);

App.controller('usuariosCTRL', function($scope,$http){

$scope.usuarios={};
$scope.modUsuario={};
$scope.usuario={};
$scope.info={};

//Boton de Eliminar
$scope.eliminar = function(u){
var mensaje = confirm("¿Desea eliminar al usuario de nombre: "+u.Nombre+"?");
if(mensaje){
 $http.post('./modelo/eliminarUsuario.php',u)
	.success(function(data,status,headers,config){
		$scope.consultar();
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
 }
}
//Actualiza los datos modificados del boton verde
$scope.actualizar = function(){
	$http.post('./modelo/modificarUsuario.php',$scope.modUsuario)
	.success(function(data,status,headers,config){
		$('#btnMod').click();
		$scope.consultar();
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
}
//El boton de modificar
$scope.modificar = function(u){
	$scope.modUsuario = u;
	$('#ModUser').modal('show');
}
//Busca en la barra de arriba
$scope.buscar = function(){
	$http.post('./modelo/buscarUsuarios.php',$scope.info)
	.success(function(data,status,headers,config){
		$scope.usuarios=data;
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
}

// Muestra las cosas en la tabla 
//  $('#ModalModUser').modal('show');
$scope.consultar = function(){
	$http.post('./modelo/consultarUsuarios.php')
	.success(function(data,status,headers,config){
		$scope.usuarios=data;
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
}
// Guarda con el modal que sale al apretar el boton de agrtegar
$scope.guardar = function(){
	$http.post('./modelo/guardarUsuario.php',$scope.usuario)
	.success(function(data,status,headers,config){
		$('#btnUser').click();
		$scope.consultar();
		$scope.usuario={};
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
}

$scope.consultar();

});