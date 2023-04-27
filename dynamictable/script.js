function table(targetElement, data) {
  // create the table basic structure
  let table = document.createElement("table");
  let thead = document.createElement("thead");
  let tbody = document.createElement("tbody");
  let target = document.getElementById(targetElement);

  // create the table header
  let h = Object.keys(data[0]);
  let tr = document.createElement("tr");
  h.forEach((header) => {
    let th = document.createElement("th");
    th.textContent = header;
    tr.appendChild(th);
  });
  thead.appendChild(tr);

  // create the table rows
  data.forEach((item) => {
    let tr = document.createElement("tr");
    for (let key in item) {
      let td = document.createElement("td");
      td.textContent = item[key];
      tr.appendChild(td);
    }
    tbody.appendChild(tr);
  });

  // bootstrap table classes
  table.className = "table table-responsive table-striped table-borderless";

  // append the table header and body to the table
  table.appendChild(thead);
  table.appendChild(tbody);
  // append the table to the target
  target.appendChild(table);
}

let y = [
  { tool: "metaspliot", description: "penetration testing" },
  { tool: "burp suite", description: "web application testing" },
  { tool: "wireshark", description: "network analysis" },
  { tool: "nmap", description: "network scanning" },
  { tool: "john the ripper", description: "password cracking" },
  { tool: "hydra", description: "password cracking" },
  { tool: "sqlmap", description: "sql injection" },
  { tool: "aircrack-ng", description: "wireless hacking" },
];

// display the table
table("table", y);

// insert a new row to the table
let insertForm = document.getElementById("insert-row");
insertForm.addEventListener("submit", (event) => {
  event.preventDefault();
  // get the new row data
  let tool = document.getElementById("tool").value;
  let description = document.getElementById("description").value;
  let newRow = { tool: tool, description: description };
  // add the new row to the table
  y.push(newRow);

  // clear the previous table
  let tableBody = document.querySelector("#table");
  tableBody.innerHTML = "";

  // re-render the table
  table("table", y);

  // reset the form
  insertForm.reset();
});

// search the table
let searchQuery = document.getElementById("search");
searchQuery.addEventListener("input", (event) => {
  let query = event.target.value.toLowerCase();
  let tableBody = document.querySelector("tbody");

  // loop over all rows and highlight matching ones
  tableBody.querySelectorAll("tr").forEach((row) => {
    let rowData = row.textContent.toLowerCase();
    if (rowData.includes(query) && query !== "") {
      row.classList.add("highlight");
    } else {
      row.classList.remove("highlight");
    }
  });
});
