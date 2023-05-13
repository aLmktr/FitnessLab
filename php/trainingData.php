<?php 
error_reporting(0);
// check if the form was submitted
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $category = $_POST['category'];

    // connect to database
    $server = "localhost"; $username = "root"; $password = ""; $dbname="fitnesslab";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        die("Connection Faild!: ". mysqli_connect_error());
    }     

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

    //close connection 
    mysqli_close($conn);
}
?>