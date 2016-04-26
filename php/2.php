
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
    <title>pg 2 - Realm of Madness</title>
    <link rel="shortcut icon"
          href="../images/happyFace.jpeg" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel='stylesheet' href='../css/Style.css' type='text/css' media='all'/>
</head>
<body>
    <?php
        include "_navbar.php";
    ?>
    <div id="content" class="content">
        <header class="entry-header">
            <h3 class="entry-title">Not so scary story</h3>
        </header>
        <div class="DisplayWords">
            <hr>
            <p> It was a bright and sunny day without a cloud in the sky, when suddenly I fell asleep. </p>
        </div>
    </div>
    <aside id="sidebar" class="sidebar">
        <p><a title="This way to 1" href="1.php">Go to 1</a></p>
        <p>
            Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar
            Sidebar Sidebar Sidebar Sidebar Sidebar Sidebar
        </p>
    </aside>
    <aside id="sidebar" class="sidebar">
        <a  target="_blank" class="ad" id="ad">
            <img src="../images/annoyingad.gif" class="ad" alt="HTML5 Icon" style="width:100%;height: 100%;">
        </a>
    </aside>
    <?php
        include "_script.php";
    ?>
</body>
</html>
