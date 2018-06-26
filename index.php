<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Index</title>
</head>

<body background="divisori.jpg">
<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

if (isset($_POST['easy']))          
    {                       
        echo' <META HTTP-EQUIV="Refresh" content="0; URL=http:mainEasy.html"> ';     
        exit();
       }
       
       if (isset($_POST['medium']))          
    {                       
        echo' <META HTTP-EQUIV="Refresh" content="0; URL=http:mainMedium.html"> ';     
        exit();
       }

if (isset($_POST['hard']))          
    {                       
        echo' <META HTTP-EQUIV="Refresh" content="0; URL=http:mainHard.html"> ';     
        exit();
       }
if (isset($_POST['tutorial']))          
    {                       
        echo' <META HTTP-EQUIV="Refresh" content="0; URL=http:tutorial.html"> ';     
        exit();
       }


?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<div align="center">
<br />
<br />
<br />
<h1>
<span style="font-family: Impact; font-size: 70px; color: white;">BLACK ENTITY</span></h1>
<br />
<br />
<br />
<p style="font-family: Impact; font-size: 40px; color: #00FF00; "> 
In 2154 earth was attacked by aliens coming from a dark dimension.
<br />
The war last 50 year and ended with the victory of umanity.
<br />
But during the conflict the aliens settled in earthly outposts.
<br />
So government created a special military division with the task of purify these places from the remaining enemies.
<br />
<br />
They were called Aliens Hunter.
</p>
<input type="submit" style="width:200px; height:400px;" name="easy" value="EASY" >
<input type="submit" style="width:200px; height:400px;" name="medium" value="MEDIUM" >
<input type="submit" style="width:200px; height:400px;" name="hard" value="HARD" >
<br />
<input type="submit" style="width:200px;" name="tutorial" value="TUTORIAL" >
</div>
</form>
</body>
</html>