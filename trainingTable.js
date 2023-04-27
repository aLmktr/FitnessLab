// function that creates table for training plans
function trainingTable(targetElement) {
  // create the basic table elements
  let table = document.createElement("table");
  let thead = document.createElement("thead");
  let tbody = document.createElement("tbody");
  let tr = document.createElement("tr");
  let td1 = document.createElement("td");
  let td2 = document.createElement("td");
  let th = document.createElement("th");

  // select the target element to append tha table to
  let target = document.getElementById(targetElement);

  // set the angular controller for the table
  table.setAttribute("ng-controller", "tableController");

  // give the styel for the table
  table.className = "table table-responsive table-striped table-borderless";

  // give the content to th
  th.setAttribute("ng-repeat", "header in headers");
  th.innerHTML = "{{header}}";

  // give the contenet to tr and td
  tr.setAttribute("ng-repeat", "row in rows");
  td1.innerHTML = "{{row.exercise}}";
  td2.innerHTML = "{{row.setsAndReps}}";

  // append the table elements to the table
  target.appendChild(table);
  table.appendChild(thead);
  table.appendChild(tbody);
  thead.appendChild(th);
  tbody.appendChild(tr);
  tr.appendChild(td1);
  tr.appendChild(td2);
}

// object construction to maintain training plan data
function trainingData(category, name, exercises) {
  this.category = category;
  this.name = name;
  this.exercises = exercises;

  this.getData = function () {
    return this.exercises;
  };
}

// array to hold training plan data
let legDayExercies = [
  { exercise: "Squats", setsAndReps: "3 x 12" },
  { exercise: "Deadlifts", setsAndReps: "3 x 10" },
  { exercise: "Lunges", setsAndReps: "3 x max" },
  { exercise: "Leg Press", setsAndReps: "3 x 15" },
  { exercise: "Calf Raises", setsAndReps: "4 x 12" },
  { exercise: "Leg Extension", setsAndReps: "3 x 15, 12, 10" },
  { exercise: "Glute-Ham Raises", setsAndReps: "3 x 10" },
];

// initialize leg day with trainingData object
let legDay = new trainingData("strength", "Leg Day", legDayExercies);

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
