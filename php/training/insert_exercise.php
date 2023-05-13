<?php
// include connection 
include_once 'php/db_connection.php';

// check for post request 
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['insert_exercises'])){
    // take info from the form 
    $name = $_POST['name'];
    $category = $_POST['category'];
    $sets = $_POST['sets'];
    $reps = $_POST['reps'];

    // validatae the inputs
    if(empty($name) || empty($category) || empty($sets) || empty($reps)){
        echo "<div class='alert alert-danger mt-3' role='alert'>All fields are required!</div>";
        return;
    }


    // insert row
    $query = "INSERT INTO exercises(name, sets, reps, category) VALUES ('$name', '$sets', '$reps', '$category')";
    if(mysqli_query($conn, $query)){
        echo "<div class='alert alert-primary mt-3' role='alert'>Exercise was Added!</div>";
    }else{
        echo "<div class='alert alert-danger mt-3' role='alert'>".mysqli_error($conn)."</div>";
    }
}

?>