// import the table and data
import { infoCardTable, activty } from "./table.js";

// define angular module/app
let app = angular.module("table-app", []);

// add the table to the html
infoCardTable("activityTable");

// add the data to the table
app.controller("tableController", function ($scope) {
  $scope.headers = ["Activity Level", "Description"];
  $scope.rows = activty.getData();
});
