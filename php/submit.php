
<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 3/10/2016
 * Time: 3:14 PM
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Realm of Madness</title>
    <link rel="shortcut icon"
          href="../images/happyFace.jpeg" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel='stylesheet' href='../css/Style.css' type='text/css' media='all'/>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<nav class="navbar navbar-default top-nav-collapse" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand page-scroll" href="homePage.php">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav">

                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="homePage.php"></a>
                </li>
                <li>
                    <a class="page-scroll" href="about.php">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="contact.php">Contact Information</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div id="content" class="content">
    <header class="entry-header">
        <h3 class="entry-title">Submit a url here</h3>
    </header>
    <div class="DisplayWords">

        <hr>
        <?php
        $nameInput=rtrim($_GET['name']);
        if(mb_strlen($nameInput)===0){
            header("Location: submit.html");

        }
        echo $_SERVER["HTTP_HOST"], "<br/>";
        echo $_SERVER["SERVER_SOFTWARE"], "<br/>";
        echo $_SERVER["SCRIPT_FILENAME"], "<br/>";
        echo "<br/>";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDatabase";
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql="INSERT INTO urls (url) VALUES ('$nameInput')";

        if ($conn->query($sql) === TRUE) {
            echo "Added url successfully";
        } else {
            echo "Error adding url: " . $conn->error;
        }

        $conn->close();
        ?>
        <p>

        </p>


    </div>

</div>

<aside id="sidebar" class="sidebar">
    <a  target="_blank" class="ad" id="ad">
        <img src="../images/annoyingad.gif" class="ad" alt="HTML5 Icon" style="width:100%;height: 100%;">
    </a>
</aside>




<script src="../js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="../js/myWeb.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/site.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/scrolling-nav.js"></script>

</body>
</html>
