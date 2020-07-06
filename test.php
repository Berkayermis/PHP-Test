<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div style="border:1px solid blue; width:350px; background:grey; text-align:center;">
  <h3 style="text-align:center;">Calculator</h3>

  <form action="site.php" method="post">
   Number 1: <input style="border:none; text-color:white;" placeholder="First number" type="number" name="n1"> <br>
   Number 2: <input style="border:none; margin-top:3px;" placeholder="Second number" type="number" name="n2"> <br>
   OP: <input style="border:none; margin-left:44px; margin-top:3px;" placeholder="+ , - , * or /" type="text" name="op"><br>
  <input type="submit" style="margin-top:5px; margin-bottom:15px;" name="submit" value="Calculate">
  </form>


</div>


<?php

$number1 = $_POST["n1"];
$number2 = $_POST["n2"];
$result;
$operator = $_POST["op"];

if($operator=="+"){
  $result = $number1+$number2;
}
else if($operator=="-"){
  $result = $number1-$number2;
}
else if($operator=="/"){
  $result = $number1/$number2;
}

else if($operator=="*"){
  $result = $number1*$number2;
}

echo "Result :",$result;

 ?>


  </body>
</html>
