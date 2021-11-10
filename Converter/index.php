<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Converter</title>
    <link rel="stylesheet" href="../converter/styles.css">

</head>


<body>

<!--Miles to Km-->


<div class="converter-body">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		<h1 class="converter-title">Miles to Kms</h1>

		<input type="number" placeholder="Input" id="input" name = "fnum" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Miles to Kilometers</option>

		</select>

		<input type = "submit">
		
		</form>
		

	<?php 
	
$fnum=isset($_POST['fnum']) ? $_POST['fnum'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum * 1.609) ; 

	echo "<input value = \"$answer\" >";
}
	?>


	</div>





<!--Cm to ft-->


    <div class="converter-body">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>
		
		<h1 class="converter-title">Cm to ft and inch</h1>

		<input type="number" placeholder="Input" id="input" name = "fnum2" >
		<span>=</span>
		
		<select  id="resultType">
			<option value="Kilometers">Cm to ft</option>

		
		</select>

		<input type = "submit">
		

</form>
<?php

$fnum2 =isset($_POST['fnum2']) ? $_POST['fnum2'] : '0';
 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	 $answer = ($fnum2 / 30.48) ; 
 
	 echo "<input value = \"$answer\" >";
 }
	 ?>
	



	
<!--Cm to inch-->


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>
		
		<input type="number" placeholder="Input" id="input" name = "fnum3" >
		<span>=</span>
		
		<select  id="resultType">
			<option value="Kilometers">Cm to inch</option>

		
		</select>

		<input type = "submit">

</form>
<?php

$fnum3 =isset($_POST['fnum3']) ? $_POST['fnum3'] : '0';
 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	 $answer = ($fnum3 / 2.54) ; 
 
	 echo "<input value = \"$answer\" >";
 }
	 ?>
	 


	</div>





<!--Pounds to Grams-->


<div class="converter-body">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		<h1 class="converter-title">Pounds to Grams</h1>

		<input type="number" placeholder="Input" id="input" name = "fnum4" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Pounds to Grams</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 

$fnum4 =isset($_POST['fnum4']) ? $_POST['fnum4'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum4 * 453.59237) ; 

	echo "<input value = \"$answer\" >";
}
	?>


	</div>





<!--Double-->	


<div class="converter-body">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		<h1 class="converter-title">Double, Squared, and Half</h1>

		<input type="number" placeholder="Input" id="input" name = "fnum5" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Double</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 
	
$fnum5 =isset($_POST['fnum5']) ? $_POST['fnum5'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum5 * 2) ; 

	echo "<input value = \"$answer\" >";
}
	?>





<!--Squared-->


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		

		<input type="number" placeholder="Input" id="input" name = "fnum6" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Squared</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 

$fnum6 =isset($_POST['fnum6']) ? $_POST['fnum6'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum6 * $fnum6 ) ; 

	echo "<input value = \"$answer\" >";
}
	?>





<!--Half-->	


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		

		<input type="number" placeholder="Input" id="input" name = "fnum7" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Half</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 

$fnum7 =isset($_POST['fnum7']) ? $_POST['fnum7'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum7 / 2 ) ; 

	echo "<input value = \"$answer\" >";
}
	?>

	</div>

   
	

	
<!--Pints to Gills-->


	<div class="converter-body">
		
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		
<h1 class="converter-title">Pint Value</h1>

		<input type="number" placeholder="Input" id="input" name = "fnum8" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Pints to Gills</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 

$fnum8 =isset($_POST['fnum8']) ? $_POST['fnum8'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum8 * 4 ) ; 

	echo "<input value = \"$answer\" >";
}
	?>



	
<!--Pints to Quarts-->	


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		


		<input type="number" placeholder="Input" id="input" name = "fnum9" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Pints to Quarts</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 

$fnum9 =isset($_POST['fnum9']) ? $_POST['fnum9'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum9 / 2 ) ; 

	echo "<input value = \"$answer\" >";
}
	?>



<!--Pints to Gallons-->	


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<?php $answer=isset($_POST['answer']) ? $_POST['answer'] : '0'; ?>

		


		<input type="number" placeholder="Input" id="input" name = "fnum10" >
		<span>=</span>
	


		<select  id="resultType">
			<option value="Kilometers">Pints to Gallons</option>

		</select>

		<input type = "submit">
		</form>
		

	<?php 

$fnum10 =isset($_POST['fnum10']) ? $_POST['fnum10'] : '0';
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$answer = ($fnum10 / 8 ) ; 

	echo "<input value = \"$answer\" >";
}
	?>




</div>

<!--------End--------->	
</body>

