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
  table.id = "trainingtable";

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
function displayTable() {
  app.controller("tableController", function ($scope) {
    $scope.headers = ["Exercise", "Sets and Reps"];
    $scope.rows = legDay.getData();
  });
}

displayTable();

// insert a new row to the table
let insertForm = document.getElementById("insert-row");
insertForm.addEventListener("submit", (event) => {
  // prevent the default action of the form
  event.preventDefault();

  // get the new row data
  let exercise = document.getElementById("exercise").value;
  let setsAndReps = document.getElementById("sets").value;

  // add the new row to the table
  legDay.exercises.push({ exercise: exercise, setsAndReps: setsAndReps });

  // re-render the table
  displayTable();

  //reset the form
  insertForm.reset();
});

// search function
let searchQuery = document.getElementById("search");
searchQuery.addEventListener("input", (key) => {
  // get the search query
  let query = searchQuery.value.toLowerCase();
  let tableBody = document.querySelector("tbody");

  // loop through the table rows
  tableBody.querySelectorAll("tr").forEach((row) => {
    let rowData = row.textContent.toLowerCase();
    if (rowData.includes(query) && query !== "") {
      row.classList.add("bg-light");
    } else {
      row.classList.remove("bg-light");
    }
  });
});
