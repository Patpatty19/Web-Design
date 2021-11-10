<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cartesian</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link rel="stylesheet" href="styles.css">
    </head>

    <header>
            <a href="index.html" class="logo">Multi-System</a>
            <div class ="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="number.php"  >Phone Number</a></li>
                    <li><a href="cartesian.php" class = "active" >Cartesian Plane</a></li>
                    <li><a href="calculator.php"  >Calculator</a></li>
                    <li><a href="converter.php" >Converter</a></li>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
            </nav>
        <div class="clearfix"></div>
        </header>

        <img src="quadrants.png" alt="cartesian" class="center1">


        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <input type="text" placeholder= "Input a letter" name="fnum" >
        <input type="text" placeholder= "Input a letter" name="fnum2" >

        <input type="submit">
        </form>


        
        <?php

$number=isset($_POST['fnum']) ? $_POST['fnum'] : '0';
$number2=isset($_POST['fnum2']) ? $_POST['fnum2'] : '0';
function quadrant($x, $y)
{
    
    // First Quadrant
    if ($x > 0 and $y > 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies in First quadrant </p> ";
    
    // Second Quadrant
    else if ($x < 0 and $y > 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies in Second quadrant </p> ";
    
    // Third Quadrant
    else if ($x < 0 and $y < 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies in Third quadrant </p> ";
    
    // Fourth Quadrant
    else if ($x > 0 and $y < 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies in Fourth quadrant </p> ";
    
    // positive Y axis
    else if ($x == 0 and $y > 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies at positive Y axis </p> ";
    
    // negative Y axis
    else if ($x == 0 and $y < 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies at negative Y axis </p> ";
    
    // negative X axis
    else if ($y == 0 and $x < 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies at negative X axis </p> ";
    
    // positive X axis
    else if ($y == 0 and $x > 0)
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies at positive X axis </p> ";
     
    // Origin    
    else
    echo "<p style = \"text-align: center; font-size: 36px; background-color: black; color: white;  \" >  lies at origin </p> ";
}
 

$x = $number; 
$y = $number2;
 
// call the function
quadrant($x, $y);
 

?>