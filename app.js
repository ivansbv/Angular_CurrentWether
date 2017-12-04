var classApp = angular.module('weatherApp',[]);

classApp.controller('weatherCtrl', function($scope, $http){

  $scope.channelInfo = {

    heading: "Open Weather API",
    github: "https://github.com/ivansbv"
  };
 
  
  $http.get("http://ip-api.com/json")

    .then(function(response){

      $scope.lat = response.data.lat;
      $scope.lon = response.data.lon;

      var apiKey = "e57a13474b266d60b10a1800ae389b55";
      var openWeatherURL = "http://api.openweathermap.org/data/2.5/weather?lat=" + $scope.lat + "&lon=" + $scope.lon + "&appid=" + apiKey;

      $http.get(openWeatherURL).then(function(response){

          $scope.description = response.data.weather[0].description;
          $scope.speed = response.data.wind.speed + " meter/sec";
          $scope.name = response.data.name;
          $scope.ctemp = ((response.data.main.temp) - 273.15).toFixed(1) + " (°C)";
          $scope.ftemp = ((response.data.main.temp * (9/5)) - 459.67).toFixed(1) + " (°F)";
          $scope.icon = "http://openweathermap.org/img/w/" + response.data.weather[0].icon + ".png";
        });
    });
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleFormat();
});

