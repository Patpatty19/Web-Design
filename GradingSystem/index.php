<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles.css?v=<?php echo time() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <?php

$number1=isset($_POST['fnum1']) ? (float) $_POST['fnum1'] : 0;
$number2=isset($_POST['fnum2']) ? (float) $_POST['fnum2'] : 0;
$number3=isset($_POST['fnum3']) ? (float) $_POST['fnum3'] : 0;
$number4=isset($_POST['fnum4']) ? (float) $_POST['fnum4'] : 0;
$number5=isset($_POST['fnum5']) ? (float) $_POST['fnum5'] : 0;
$number6=isset($_POST['fnum6']) ? (float) $_POST['fnum6'] : 0;

// attendance
$number1 = $number1 * .10; 

// quiz #1
$number2 = $number2 * .20; 

// quiz #2
$number3 = $number3 * .20; 

// lab work #1
$number4 = $number4 * .25; 
 
// lab work #2
$number5 = $number5 * .25; 

// exam
$number6 = $number6 * .40; 



$cpar = $number1 + $number2 + $number3 + $number4 + $number5;
$cpar = $cpar * .60;


$finalgrd = $cpar + $number6;


$midtermgrd = $cpar + $number6;


$finalgrd = $finalgrd * .50;
$midtermgrd = $midtermgrd * .50;
$semestralgrd = $midtermgrd + $finalgrd;


?>

</head>

<body>

    <div class="calc-body">
        <div class="result">
            <h1>Result</h1>
            <div class="show">
                <h2>Semestral Grade: <?php echo $semestralgrd; ?><span id="semestral"></span></h2>
                <br>
                <h2>Midterm Grade: <?php echo $midtermgrd; ?> <span id="midterm"></span></h2>
                <br>
                <h2>Final Grade: <?php echo $finalgrd; ?> <span id="final"></span></h2>
                <br>
                <h2>Class Participation:  <?php echo $cpar; ?> <span id="cp"></span></h2>
            </div>
        </div>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="inp">
            <div class="main">
                <input min= '50' max='100' type="number" name="fnum1" id="attendance" placeholder="Attendance"><br>
                <input min= '50' max='100' type="number" name="fnum2" id="quiz1" placeholder="Quiz #1"><br>
                <input min= '50' max='100' type="number" name="fnum3" id="quiz2" placeholder="Quiz #2"><br>
                <input min= '50' max='100' type="number" name="fnum4" id="labwork1" placeholder="Lab work #1"><br>
                <input min= '50' max='100' type="number" name="fnum5" id="labwork2" placeholder="Lab work #2"><br>
                <input min= '50' max='100' type="number" name="fnum6" id="exam" placeholder="Exam"><br>
                <input type="submit">
            </div>
        </div>
    </div>
</form>


</div>
</body>
</html>