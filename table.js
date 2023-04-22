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

// export the table objects
export { trainingTable, infoCardTable };
