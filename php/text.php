
<!Benjamin Nimchinsky
BNN8@pitt.edu>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What do you want to add to the text file?</title>
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
<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 3/14/2016
 * Time: 10:19 PM
 */
$fileName = "text.txt";
$file = fopen("text.txt", "a+");
$registered=false;
$runs=0;
$fileName = "text.txt";
$file = fopen("text.txt", "a+");
$runs=0;
$nameInput=rtrim($_GET['name']);
if(mb_strlen($nameInput)===0){
    header("Location: text.html");
    exit();
}
while (($name = fgets($file)) !== false) {
    $runs++;
}
if($registered===false){
    if($runs===0) fwrite($file, $nameInput);
    else{
        fwrite($file, "\r\n".$nameInput);
    }
    echo "Congratulations  ".$nameInput.", has been entered into the text file!!";
}
fclose($file);
?>
<form action="../html/text.html">
    <input type="submit" value="Return">
</form>
</div>
</body>