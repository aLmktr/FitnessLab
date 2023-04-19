// initalize angular app
let app = angular.module("table-app", []);
// create controller for table
app.controller("customTable", function ($scope) {
  // create table headers
  $scope.headers = ["Exercise", "Sets", "Reps"];
  // create table rows
  $scope.rows = [
    { exerice: "Bench Press", sets: "3", reps: "10" },
    { exerice: "Bench Press", sets: "3", reps: "10" },
    { exerice: "Bench Press", sets: "3", reps: "10" },
    { exerice: "Bench Press", sets: "3", reps: "10" },
  ];
});
