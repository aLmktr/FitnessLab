<?php
    
    // check if form was submited 
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // take info from the form 
        $name = $_POST['name'];
        $category = $_POST['category'];
        $sets = $_POST['sets'];
        $reps = $_POST['reps'];

        // connect to database
        $server = "localhost"; $username = "root"; $password = ""; $dbname="fitnesslab";
        $conn = mysqli_connect($server, $username, $password, $dbname);
        if(!$conn){
            die("Connection Faild!: ". mysqli_connect_error());
        }     

        // insert row
        $query = "INSERT INTO exercises(name, sets, reps, category) VALUES ($name, $sets, $reps, $category)";
        if(mysqli_query($conn, $query)){
            echo "<div class='alert alert-primary' role='alert'>Exercise was Added!</div>";
        }else{
            echo "<div class='alert alert-primary' role='alert'>".mysqli_error($conn)."</div>";
        }


        // close connection 
        mysqli_close($conn);
    }

?>