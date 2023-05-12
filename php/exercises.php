<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitnesslab</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
   <h1>Exercises Database</h1>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <select name="category">
            <option value="legs">Legs</option>
            <option value="chest">Chest</option>
            <option value="back">Back</option>
            <option value="shoulders">Shoulders</option>
            <option value="triceps">Triceps</option>
            <option value="biceps">Biceps</option>
        </select>
        <input type="submit" value="submit">
   </form>

   <?php 
   // do the following if there's a post request
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $category = $_POST["category"]; 
    echo "<h2>Reslut for $category Exercises</h2>";
    // connect to databse
    $server = "localhost"; $username = "root"; $password = ""; $dbname="fitnesslab";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        die("Connection Faild!: ". mysqli_connect_error());
    }

    // query data
    $query = "SELECT * FROM exercises WHERE category ='".$category."'";
    $reslut = mysqli_query($conn, $query);

   // display data
   if(mysqli_num_rows($reslut) > 0){
    echo "<table>". 
         "<tr><td>ID</td><td>Name</td><td>Sets</td><td>Reps</td></tr>";
    while($row = mysqli_fetch_assoc($reslut)){
        echo "<tr>". 
             "<td>".$row["id"]."</td>".
             "<td>".$row["name"]."</td>".
             "<td>".$row["sets"]."</td>".
             "<td>".$row["reps"]."</td>".
             "</tr>";
    }
    echo "</table>";
   } else {
    echo "No Exercises found";
   }

    // close connection
    mysqli_close($conn);
   }
    ?>
</body>
</html>