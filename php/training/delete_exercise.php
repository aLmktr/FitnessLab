<?php 
// include connection 
include_once 'php/db_connection.php';

// check for post request
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["remove_exercise"])){
    // take info from the form 
    $name = $_POST["name"];

    if(empty($name)){
        echo "<div class='alert alert-danger mt-3' role='alert'>All fields are required!</div>";
        return;
    } else {
        // delete row
        $query = "DELETE FROM exercises WHERE name = '$name'";
        if(mysqli_query($conn, $query)){
            echo "<div class='alert alert-primary mt-3' role='alert'>Exercise was Deleted!</div>";
        }else{
            echo "<div class='alert alert-danger mt-3' role='alert'>".mysqli_error($conn)."</div>";
        }
    }
}

?>