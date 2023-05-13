<?php 
// inlude the connection 
include_once 'php/db_connection.php';

// check for post request    
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search_exercises'])){
    // get the category
    $category = $_POST['category'];

    // query database
    $sql = "SELECT * FROM exercises WHERE category = '$category'";
    $result = mysqli_query($conn, $sql);

    // display table 
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-borderless table-responsive table-striped'>". 
            "<thead>". "<tr>" . "<th>Exercise</th>" . "<th>Sets</th>" . "<th>Reps</th>" . "</tr> </thead>";
        while($row = mysqli_fetch_assoc($result)){
        echo "<tr>" .
        "<td>" . $row["name"] . "</td>" .
        "<td>" . $row["sets"] . "</td>" . 
        "<td>" . $row["reps"] . "</td>" .
        "</tr>";
        }
    } else {
        echo "<div class='alert alert-primary' role='alert'>0 Reslut found!</div>";
    }
}
?>