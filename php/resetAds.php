<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 4/17/2016
 * Time: 3:51 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DROP TABLE IF EXISTS urls";
$conn->query($sql);//drop here
// sql to create table
$sql = "CREATE TABLE urls (
url VARCHAR(100) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    header("Location: ../php/homePage.php");
    exit();
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>