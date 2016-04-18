
<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 3/10/2016
 * Time: 3:14 PM
 */
$url = $_REQUEST['url'];
$urlInput=rtrim($_GET['url']);
if(mb_strlen($urlInput)!==0) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDatabase";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO urls (url) VALUES ('$urlInput')";
    if ($conn->query($sql) === TRUE) {
        echo "Added url successfully";
    } else {
        echo "Error adding url: " . $conn->error;
    }
    $conn->close();
}
?>

