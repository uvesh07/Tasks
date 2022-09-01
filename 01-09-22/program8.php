<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 8</title>

    
</head>

<body>

    <h1>Read marks of three subjects of a student and print total, percentage and
        division.</h1>
    <form action="" method="get">
        <label for="maths">Enter Marks of Maths : </label> <input type="number" id="maths" name="maths"> <br>
        <label for="hindi">Enter Marks of Hindi : </label> <input type="number" id="hindi" name="hindi"> <br>
        <label for="phys">Enter Marks of Physics : </label> <input type="number" id="phys" name="phys"> <br>

        <button>Submit</button>
    </form>
    

    <?php
        
            // var sub1, sub2, sub3, total, pers, division;

            $sub1 = $_GET['maths'];
            $sub2 = $_GET['hindi'];
            $sub3 = $_GET['phys'];
            $total = intval($sub1 + $sub2 + $sub3);

            $pers = (($sub1 + $sub2 + $sub3) / 3);

            if ($pers >= 90) {
                $division = "First class";
            }

            elseif ($pers > 80 && $pers < 90) {
                $division = "Second class";
            }

            elseif ($pers > 70 && $pers <= 80) {
                $division = "Third class";
            }

            elseif ($pers > 40 && $pers <= 70) {
                $division = "Pass";
            }

            else {
                $division = "Fail";
            }

           echo "Total marks is : " . $total . "<br> Persentage of student is : " . $pers . "<br> Division of student is : " . $division ;
      ?>
</body>

</html>