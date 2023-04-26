// import the table and data
import { trainingTable, legDay } from "./table.js";

// define angular module/app
let app = angular.module("table-app", []);

// add the table to the html
trainingTable("legDayTable");

// add the data to the table
app.controller("tableController", function ($scope) {
  $scope.headers = ["Exercise", "Sets and Reps"];
  $scope.rows = legDay.getData();

  // add new element
  $scope.addToLegDay = function () {
    console.log("addToLegDay is indeed working");
    $scope.rows.push({
      exercise: $scope.exerciseName,
      setsAndReps: $scope.setsAndReps,
    });
    $scope.exerciseName = "";
    $scope.setsAndReps = "";
  };
});
