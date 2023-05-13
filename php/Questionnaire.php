<?php 
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

  $name = questionnaire($_POST["name"]);
  $email = questionnaire($_POST["email"]);
  $rating = questionnaire($_POST["rating"]);
  $feedback = questionnaire($_POST["feedback"]);
  $improvements = isset($_POST["improvements"]) ? implode(", ", $_POST["improvements"]) : "None selected";
  $newsletter = isset($_POST["newsletter"]) ? "Yes" : "No";
}

function questionnaire($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_COMPAT, 'UTF-8');
  return $data;
}

    //close connection 
    mysqli_close($conn);
}
?>
