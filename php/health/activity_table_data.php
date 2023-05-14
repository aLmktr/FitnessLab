<?php 
// include connection 
include_once 'php/db_connection.php';

// query database 
$sql = "SELECT * FROM activity_levels";
$result = mysqli_query($conn, $sql);

// display table 
if(mysqli_num_rows($result) > 0){
    echo "<table class='table table-borderless table-responsive table-striped'>". 
            "<thead>". "<tr>" . "<th>Activity Leve</th>" . "<th>Description</th>" . "</tr> </thead>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>" .
        "<td>" . $row["level"] . "</td>" .
        "<td>" . $row["description"] . "</td>" . 
        "</tr>";
    };
};
return;
?>