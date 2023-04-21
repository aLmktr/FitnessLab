// import tbale data
import { legDay, activty } from "./tablesData.js";
// import table objects
import { trainingTable, infoCardTable } from "./table.js";

// define angular module/app
let app = angular.module("table-app", []);

// add the table to the html
trainingTable("tableContainer");

// add the data to the table
app.controller("tableController", function ($scope) {
  // set the header for the table
  $scope.headers = ["Exercise", "Sets and Reps"];
  $scope.rows = legDay.getData();
});

// add style to the table after it is created
