<?php 
    // check if form submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $calorie = $_POST["calorie"];

        // connect to database
        $server = "localhost"; $username = "root"; $password = ""; $dbname="fitnesslab";
        $conn = mysqli_connect($server, $username, $password, $dbname);
        if(!$conn){
            die("Connection Faild!: ". mysqli_connect_error());
        }     

        // query database
        $sql = "SELECT * FROM food WHERE calories < '$calorie'";
        $result = mysqli_query($conn, $sql);

        // display table 
        if(mysqli_num_rows($result) > 0){
            echo "<table class='table table-borderless table-responsive table-striped'>". 
                "<thead>". "<tr>" . "<th>Food Name</th>" . "<th>Calories</th>" . "<th>Serving Size</th>" . "</tr> </thead>";
            while($row = mysqli_fetch_assoc($result)){
            echo "<tr>" .
             "<td>" . $row["name"] . "</td>" .
             "<td>" . $row["calories"] . "</td>" . 
             "<td>" . $row["serving_size"] . "</td>" .
             "</tr>";
            }
        } else {
            echo "<div class='alert alert-primary' role='alert'>0 Reslut found!</div>";
        }

        //close connection 
        mysqli_close($conn);
    }
    
    ?>