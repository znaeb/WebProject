
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
    <title>pg 1 - Realm of Madness</title>
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
            <h1 class="entry-title">You are at some page or something!!!!!!!!</h1>
        </header>
        <div class="DisplayWords">
            <hr>
            <p><strong>There aren't any words here</strong></p>
            <p> I lied </p>
        </div>
    </div>
    <aside id="sidebar" class="sidebar">
        <p><a title="This way to 2" href="2.php">Go to 2</a></p>
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
