<?php
    
    // check if form was submited 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
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
 
         // connect to database
         $server = "localhost"; $username = "root"; $password = ""; $dbname="fitnesslab";
         $conn = mysqli_connect($server, $username, $password, $dbname);
         if(!$conn){
             die("Connection Faild!: ". mysqli_connect_error());
         }     
 
         // insert row
         $query = "INSERT INTO exercises(name, sets, reps, category) VALUES ('$name', '$sets', '$reps', '$category')";
         if(mysqli_query($conn, $query)){
             echo "<div class='alert alert-primary mt-3' role='alert'>Exercise was Added!</div>";
         }else{
             echo "<div class='alert alert-danger mt-3' role='alert'>".mysqli_error($conn)."</div>";
         }
 
 
         // close connection 
         mysqli_close($conn);
    }
   
?>