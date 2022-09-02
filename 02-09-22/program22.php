<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 22</title>
</head>

<body>

    <h1>Program to print name of month when the number is given.</h1>
<form action="" method="get">
    <label for="">Enter month between 1 to 12 : </label> <input type="number" name="month"> <br>
    <input type="submit" name="btn">
</form>    

<?php

error_reporting(0);

 $temp = intval($_GET['month']);
 

 switch ($temp) {
     case 1:
         $month = "January";
         break;

         case 2:
         $month = "February";
         break;
         
         case 3:
         $month = "March";
         break;

         case 4:
         $month = "April";
         break;

         case 5:
         $month = "May";
         break;

         case 6:
         $month = "June";
         break;

         case 7:
         $month = "July";
         break;

         case 8:
         $month = "August";
         break;

         case 9:
         $month = "September";
         break;

         case 10:
         $month = "October";
         break;

         case 11:
         $month = "November";
         break;

         case 12:
         $month = "December";
         break;
 }

 echo "The month you Entered is : " . $month;
?>
</body>

</html>