<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>

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
                    <li><a href="calculator.php" class = "active" >Calculator</a></li>
                    <li><a href="converter.php" >Converter</a></li>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
            </nav>
        <div class="clearfix"></div>
        </header>

        <img src="calcu.png" alt="calculator" class="center2">


 
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
}
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo ' <script type="text/javascript">
        
$(document).ready(function(){

  swal({
    position: "top-end",
    type: "success",
    title: "Error",
    text:"Undefined",
    showConfirmButton: false,
    timer: 3000
  })
});

</script>';

} else if ($_REQUEST['operator']== "/" || $_REQUEST['second_value']== 0  ) {
  echo ' <script type="text/javascript">
        
$(document).ready(function(){

  swal({
    position: "top-end",
    type: "success",
    title: "Error",
    text:"Your denominator is 0",
    showConfirmButton: false,
    timer: 3000
  })
});

</script>';
}

?>
 
 <form style="width: 256px; " method="post" action="http://localhost/MultiSystem/calculator.php">
<table style="border:groove #00FF99; width: 500px; display: flex; flex-direction: row; transform: translateX(142%) ">
 
<tbody style="width: 256px;"><tr>
<td style="background-color:turquoise; color:black; font-family:&#39;Times New Roman&#39;">Enter Number</td>
<td style="transform: translateX(-35%)">
<input name="first_value" type="text" style="color:red"></td>
</tr>
 
<tr>
<td style="color:red; font-family:&#39;Times New Roman&#39;">Select Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:turquoise; color:black; font-family:&#39;Times New Roman&#39; ">Enter Number</td>
<td style="transform: translateX(-35%)">
<input name="second_value" type="text" style="color:red"></td> 
</tr>
 
<tr>
<td></td>
<td><button type="submit" name="calculate" value="Calculate" style="transform: translateX(-1500%)"></button></td>	 
</tr>
 
<tr>
<td style="background-color:turquoise;color:black">Output = </td>
<td style="font-size: 40px; transform: translateX(11%); color: white;" ><?php echo $res; ?></td>
</tr>	
 
</tbody></table>
</form>
 
</body>
</html>
