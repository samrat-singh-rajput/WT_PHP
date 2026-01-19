 <?php
 function daysInMonth($x){
         if($x == 1 || $x == 3 || $x == 5 || $x == 7 || $x == 8 || $x == 10 || $x == 12){
             echo "31 days";
         }
         elseif($x == 4 || $x == 6 || $x == 9 || $x == 11){
             echo "30 days";
         }
         elseif($x == 2){
             echo "28 or 29 days";
         }
         else{
             echo "Invalid month number";
         }
         //sdfghj
 }

 daysInMonth(3);

 ?>