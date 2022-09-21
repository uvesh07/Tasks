<?php 

echo "Final Keyword Example in class: ";

final class A{ // Final class can't be extended    
        function meth()
        {
        }
}
// class B extends A{ //Class B cannot extend final class A
//     function meth(){
//     }
// }
//Fatal error

?>