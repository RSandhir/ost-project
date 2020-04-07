<!DOCTYPE html>
<html>
<head>
<title>Result</title>
</head>
<body>
<h1>Electricity bill Calculator</h1>
Your bill is:
<?php 

$val=$_POST["units"];

if($val<=50){echo $val*9;}
elseif($val<=100 and $val>50){echo $val*12;}
elseif($val>100){echo $val*15;}
?> INR
</body>
</html>


