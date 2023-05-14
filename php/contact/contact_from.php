<?php 
// chekc if form was submitted 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // take info from the form 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['body'];

    // validate inputs 
    if($name == "" || $email == "" || $msg == "" ){ 
        echo "<div class='alert alert-danger mt-3' role='alert'>All Fields are required !</div>";
    } else {
        echo "<div class='alert alert-primary mt-3' role='alert'>From Was submitted successfully</div>";
    }
}
?>