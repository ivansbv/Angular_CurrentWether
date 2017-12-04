<!DOCTYPE html>
<html>
<head>
	<title>Current Weather</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.angularjs.org/1.6.5/angular.min.js"></script>
	<script src="app.js"></script>
</head>
<body ng-app="weatherApp" ng-controller="weatherCtrl" class="text-center">
	<div class="container">
		<h1>{{channelInfo.heading}}</h1>
		<h3><a href="{{channelInfo.github}}" target="_blank">Creator GitHub Profile</a></h3>
		<div class="panel panel-primary">
			<div class="panel-heading"><h4 id="time"></h4></div>
			<div class="panel-body">
				<a class="btn-lg btn-primary">{{description | uppercase}} <img src="{{icon}}"></a>
				<a class="btn-lg btn-primary">{{speed}}</a>
				<a class="btn-lg btn-primary">{{name}}</a>
				<a class="btn-lg btn-primary" ng-init="tempVal=true" ng-show="tempVal" ng-click="tempVal=!tempVal">{{ctemp}}</a>
				<a class="btn-lg btn-primary" ng-show="!tempVal" ng-click="tempVal=!tempVal">{{ftemp}}</a>
			</div>
		</div>
		
		
	</div>
</body>
</html>