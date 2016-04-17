<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 4/17/2016
 * Time: 5:08 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDatabase";
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$query = "SELECT * FROM urls";
$result = $db->query($query);
$rows = $result->num_rows;
$Urls[$rows]=array();
if ($db->query($query) ) {
    $query = "select url from urls order by rand() limit 1";
    $result = $db->query($query);
    $rows = $result->num_rows;
    if ($rows >= 1):
        header('Content-type: text/xml');
        $row = $result->fetch_array();
        $ans = $row['url'];
        die ($row['url']);
    else:
        die("//www.youtube.com/watch?v=dQw4w9WgXcQ");
        //die ("There are no ads!");
    endif;

} else {

    echo "conn error: " . $db->error;
}


$db->close();

//if (count($Urls)===0) header("Location: //www.youtube.com/watch?v=dQw4w9WgXcQ");
//$get=rand(0,$rows-1);

//header("Location: //$Urls[$get]");
?>
