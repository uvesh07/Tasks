<html>
<head>
<title>program 15</title>
</head>
<body>
    <h1>PHP Array : </h1>
    <h2>Read an array and find out how many elements are prime.</h2>

<?php
$arr = array(11,20,13,40,50,17,10);
$count = 0;

function check($num){

    if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

for($i=0;$i<count($arr);$i++){
    $flag_val = check($arr[$i]);
    if ($flag_val == 1)
       $count++;
}



echo "Number of prime elements is : " . $count; 
?>
</body>
</html>