<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Converter</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>

    <header>
            <a href="index.html" class="logo">Multi-System</a>
            <div class ="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="number.php"  >Phone Number</a></li>
                    <li><a href="cartesian.php" >Cartesian Plane</a></li>
                    <li><a href="calculator.php"  >Calculator</a></li>
                    <li><a href="converter.php" class = "active" >Converter</a></li>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
            </nav>
        <div class="clearfix"></div>
        </header>

        <img src="convert.png" alt="converter" class="center1">

        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <input type="text" placeholder= "Input numbers" name="fnum" >

        <input type="submit">
        </form>


        <?php

$number=isset($_POST['fnum']) ? $_POST['fnum'] : '0';
class numbertowordconvertsconver {
    function convert_number($number) 
    {
        if (($number < 0) || ($number > 9999 )) 
        {
            throw new Exception("Number is out of range");
        }
        $giga = floor($number / 1000000);
        // Millions (giga)
        $number -= $giga * 1000000;
        $kilo = floor($number / 1000);
        // Thousands (kilo)
        $number -= $kilo * 1000;
        $hecto = floor($number / 100);
        // Hundreds (hecto)
        $number -= $hecto * 100;
        $deca = floor($number / 10);
        // Tens (deca)
        $n = $number % 10;
        // Ones
        $result = "";
        if ($giga) 
        {
            $result .= $this->convert_number($giga) .  "Million";
        }
        if ($kilo) 
        {
            $result .= (empty($result) ? "" : " ") .$this->convert_number($kilo) . " Thousand";
        }
        if ($hecto) 
        {
            $result .= (empty($result) ? "" : " ") .$this->convert_number($hecto) . " Hundred";
        }
        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");
        if ($deca || $n) {
            if (!empty($result)) 
            {
                $result .= " and ";
            }
            if ($deca < 2) 
            {
                $result .= $ones[$deca * 10 + $n];
            } else {
                $result .= $tens[$deca];
                if ($n) 
                {
                    $result .= "-" . $ones[$n];
                }
            }
        }
        if (empty($result)) 
        {
            $result = "zero";
        }
        return $result;
    }
}


$class_obj = new numbertowordconvertsconver();
$convert_number = $number;
echo "<p style = \"text-align: center; font-size: 36px; background-color: white; \" >" . $class_obj->convert_number($convert_number) . "</p>";


?>

