// import tbale data
import { legDay } from "./tablesData.js";
// import table objects
import { trainingTable } from "./table.js";

// define angular module/app
let app = angular.module("table-app", []);

// add the table to the html
trainingTable("legDayTable");

// add the data to the table
app.controller("tableController", function ($scope) {
  $scope.headers = ["Exercise", "Sets and Reps"];
  $scope.rows = legDay.getData();
});
