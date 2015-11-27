<!DOCTYPE html>
<html ng-app="amigoApp" ng-controller="appCtrl">
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/angular.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>
	<script src="js/angular-route.min.js"></script>
	
</head>
<body >
	<div class="container">
	<!--inicio navbar-->
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Amigos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ng-class="{active:isActive('/amigos')}"><a href="#/amigos">Listado <span class="sr-only">(current)</span></a></li>
        <li ng-class="{active:isActive('/amigo')}"><a href="#/amigo/">Editar</a></li>
        <li ng-class="{active:isActive('/nuevo')}"><a href="#/nuevo/">Nuevo</a></li>
      </ul>
    </div><!-- /.navbar-collapse  -->
  </div><!-- /.container-fluid -->
</nav>
	<!--fin navbar-->

		<ng-view>
		</ng-view>
	</div>
</body>
</html>