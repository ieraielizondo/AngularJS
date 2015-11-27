var app=angular.module("MiApp",[]);
app.controller("MiCont",["$scope","$http",function($scope,$http){
	$scope.nombre="";
	$scope.nombres=[{nombre:"Ierai"},	
		{nombre:"Chris"},
		{nombre:"Egoitz"},
		{nombre:"Iker"}
		];
		$scope.mostrarAlert=false;

	$scope.actualizarNombre=function(){
		$scope.saludo="Add "+$scope.nombre;
		$scope.nombres.push({nombre:$scope.nombre});

	}
	$scope.actualizarFotos=function(){
		if($scope.nombre==""){
			$scope.mostrarAlert=true;
		}else{
			$scope.mostrarAlert=false;
			$http({
			method:'JSONP',
			url:'http://api.flickr.com/services/feeds/photos_public.gne',
			params:{
				'format':'json',
				'jsoncallback':'JSON_CALLBACK',
				'tagmode':'any',
				'tags':$scope.nombre
			}
			}).success(function(data) {
				console.log(data);
				$scope.fotos=data.items;			  
			});
		}
	}    
		
}]);