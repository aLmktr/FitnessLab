// function to create tables for information cards
function infoCardTable(targetElement) {
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
  table.id = "activityTable";

  // give the styel for the table
  table.className = "table table-responsive table-striped table-borderless";

  // give the content to th
  th.setAttribute("ng-repeat", "header in headers");
  th.innerHTML = "{{header}}";

  // give the contenet to tr and td
  tr.setAttribute("ng-repeat", "row in rows");
  td1.innerHTML = "{{row.level}}";
  td2.innerHTML = "{{row.description}}";

  // append the table elements to the table
  target.appendChild(table);
  table.appendChild(thead);
  table.appendChild(tbody);
  thead.appendChild(th);
  tbody.appendChild(tr);
  tr.appendChild(td1);
  tr.appendChild(td2);
}

// object construction to maintain information card data
function infoCard(acitvity, description) {
  this.acitvity = acitvity;
  this.description = description;

  this.getData = function () {
    return this.description;
  };
}

// array to hold information card data
let activityDescription = [
  {
    level: "Sedentary",
    description:
      "This activity level describes a lifestyle with little to no physical activity or exercise beyond what is necessary for daily living, such as walking around the house or office.",
  },
  {
    level: "Lightly Active",
    description:
      "This activity level describes a lifestyle that involves some physical activity or exercise, such as daily walks or light workouts, but mostly sedentary activities like desk work or light housework.",
  },
  {
    level: "Moderately Active",
    description:
      "This activity level describes a lifestyle that includes regular physical activity or exercise, such as daily workouts or active hobbies, along with some sedentary activities like desk work.",
  },
  {
    level: "Very Active",
    description:
      "This activity level describes a lifestyle with high levels of physical activity or exercise, such as intense workouts or physically demanding jobs, with minimal sedentary activities.",
  },
];

// initialize information card with infoCard object
let activty = new infoCard("activity", activityDescription);

// define angular module/app
let app = angular.module("table-app", []);

// add the table to the html
infoCardTable("activityTable");

// add the data to the table
function displayTable() {
  app.controller("tableController", function ($scope) {
    $scope.headers = ["Activity Level", "Description"];
    $scope.rows = activty.getData();
  });
}
displayTable();

// insert a row to the table
let insertForm = document.getElementById("insertRow");
insertRow.addEventListener("submit", (event) => {
  // get the new values
  let newLevel = document.getElementById("activity").value;
  let newDescription = document.getElementById("description").value;
  let newRow = { level: newLevel, description: newDescription };

  // add the new row
  activityDescription.push(newRow);

  // display the new table
  displayTable();

  // reset the form
  insertForm.reset();
});

// search table
let searchQuery = document.getElementById("search");
searchQuery.addEventListener("input", (key) => {
  let query = searchQuery.value.toLowerCase();
  let tableBody = document.querySelector("tbody");

  tableBody.querySelectorAll("tr").forEach((row) => {
    let rowData = row.textContent.toLowerCase();
    if (rowData.includes(query) && query != "") {
      row.classList.add("bg-light");
    } else {
      row.classList.remove("bg-light");
    }
  });
});
