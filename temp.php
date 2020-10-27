<!DOCTYPE html>
<html>
<head>
<title>Temperature Converter</title>
</head>
<body>
<br/>
<body bgcolor="pink">
<h1>Temperature Converter</h1><br><br>
<h3>Enter the temperature in the box and select its type...</h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="number" name="temperature">
<input type="radio" name="units" value="C">Celcius
<input type="radio" name="units" value="F">Farenheit <br><br>
<input type="submit" name="submit" value="CONVERT"><br><br>
</form>
<?php
if(isset($_POST['submit']))
{
$temperature=$_POST['temperature'];
$units=$_POST['units'];
if($units=="C")
{
$result=$temperature*9/5+32;
echo "$temperature degree Celcius = " .$result . " degree Farenheit";
}
else
{
$result=($temperature-32)*5/9;
echo "$temperature degree Farenheit = " .$result . " degree Celcius";
}
}
?>
</body>
</html>