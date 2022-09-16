<?php
class WheeledVehicle
{
    function check($a){

        if($a == 4){
            echo "<h3>CAR</h3>";
        }
        else{
            echo "<h3>NOT A CAR</h3>";
        }
    }
}

$obj = new WheeledVehicle();

$obj->check(5);

?>
