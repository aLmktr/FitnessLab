<?php 
// connect to database
$server = "localhost"; $username = "root"; $password = ""; $dbname="fitnesslab";
$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    die("Connection Faild!: ". mysqli_connect_error());
}     
?>