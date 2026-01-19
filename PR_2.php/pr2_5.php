<?php

$sum=0;
for($i=1;$i<=200;$i++){
    if($i % 2 !=0){
        $sum +=$i;
    }
    
}
echo "The sum of first 100 odd  num is: ".$sum;

?>