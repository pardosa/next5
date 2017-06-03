<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/angular-timer.min.js')}}"></script>
        <script>
            var app = angular.module('myRaceApp', []);

            app.config(function ($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            });

            app.controller('NextFive', function($scope, $http, $timeout) {
                // $http.get('API URL').
                //     then(function(response) {
                //         $scope.races = response.data;
                //     });
                $scope.races = [
                    {
                        "id":1,
                        "closing_time": "2017-06-03 23:59:59",
                        "type": "Greyhounds",
                        "location": "Meeting",
                        "race": 2,
                        "desciption":"This is Greyhounds race"
                    },
                    {
                        "id":2,
                        "closing_time": "2017-06-03 23:59:59",
                        "type": "Thoroughbred",
                        "location": "Meeting",
                        "race": 4,
                        "desciption":"This is Thoroughbred race"
                    },
                    {
                        "id":3,
                        "closing_time": "2017-06-03 23:59:59",
                        "type": "Harness",
                        "location": "Meeting",
                        "race": 3,
                        "desciption":"This is Harness race"
                    },
                    {
                        "id":4,
                        "closing_time": "2017-06-03 23:59:59",
                        "type": "Greyhounds",
                        "location": "Meeting",
                        "race": 2,
                        "desciption":"This is Greyhounds race"
                    },
                    {
                        "id":5,
                        "closing_time": "2017-06-03 23:59:59",
                        "type": "Thoroughbred",
                        "location": "Meeting",
                        "race": 1,
                        "desciption":"This is Thoroughbred race"
                    }
                ];
                
            });

        </script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
    </head>
    <body ng-app="myRaceApp">
    <div class="container theme-showcase" role="main">
        <div class="row">
            <div class="page-header">
                <h1>Ladbrokes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Next Racing To Go</h3>
                </div>
                <div class="panel-body" ng-controller="NextFive">
                    <ul class="timeline">
                        <li ng-repeat="race in races">
                            <div>
                                <p>Location <% race.id %>, Race <% race.race %> </p>
                                <p>
                                    <button type="button" class="btn btn-sm btn-primary" ng-if="race.type == 'Greyhounds'"><% race.type %></button>
                                    <button type="button" class="btn btn-sm btn-success" ng-if="race.type == 'Thoroughbred'"><% race.type %></button>
                                    <button type="button" class="btn btn-sm btn-info" ng-if="race.type == 'Harness'"><% race.type %></button>
                                    <!-- <timer end-time="race.closing_time | date:'medium'"><% days%> days, <% hours %> hours, <% minutes %> minutes, <% seconds %> seconds.</timer> -->
                                    </p>
                                <p>Desc: <% race.desciption %></p>
                            </div>
                        </li>
                    </ul>
                </div>
              </div>
            </div><!-- /.col-sm-4 -->
        </div>
    </div>

    </body>
</html>
