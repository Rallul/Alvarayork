var App = angular.module('app',[]);

App.controller('usuariosCTRL', function($scope,$http){

$scope.usuarios={};
$scope.modUsuario={};
$scope.usuario={};
$scope.info={};

$scope.eliminar = function(u){
var mensaje = confirm("¿Desea eliminar al usuario: "+u.usuario+"?");
if(mensaje){
 $http.post('./modelo/eliminarUsuario.php',u)
	.success(function(data,status,headers,config){
		$scope.consultar();
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
 }
}

$scope.actualizar = function(){
	$http.post('./modelo/modificarUsuario.php',$scope.modUsuario)
	.success(function(data,status,headers,config){
		$('#btnMod').click();
		$scope.consultar();
	}).error(function(data,status,headers,config){
		alert("Error BD");
	});
}

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