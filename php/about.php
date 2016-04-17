
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

<body>


<nav class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="../home.php">Home</a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav">

                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="../home.php"></a>
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
        <h1 class="entry-title">About this site</h1>
    </header>
    <div class="DisplayWords">

        <hr>

        <p>
            This site used to have a purpose, but it dropped it while is was playing football. The moral of this is that
            playing sports will make you have no purpose. You should play video games instead.
        </p>


    </div>

</div>


<aside id="sidebar" class="sidebar">
    <p><a title="This way to 1" href="1.php">Go to 1</a></p>
    <p><a title="This way to 2" href="2.php">Go to 2</a></p>


    <p>

        Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar
        Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar and more Sidebar nom nom eating all the side bar
    </p>
</aside>



<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/site.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/scrolling-nav.js"></script>
</body>
</html>