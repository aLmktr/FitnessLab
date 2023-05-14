<?php 
// check for post request 
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // take from info
  $name = $_POST["name"];
  $email = $_POST["email"];
  $feedback = $_POST["feedback"];
 

 // validate required form fields
 if(empty($name) || empty($email) || empty($feedback) ){
    if(empty($name)) {
      echo "<div class='alert alert-danger mt-3' role='alert'>Name is required!</div>";
    }
    
    if(empty($email)) {
      echo "<div class='alert alert-danger mt-3' role='alert'>Email is required!</div>";
    }
    
    if(empty($feedback)) {
      echo "<div class='alert alert-danger mt-3' role='alert'>Feedback is required!</div>";
    }
 } else {
   echo "<div class='alert alert-primary mt-3' role='alert'>From Submitted successfuly</div>";
 }
  
}

?>