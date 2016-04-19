
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
<?php
    include "_navbar.php";
?>
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