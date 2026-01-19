<!DOCTYPE html>
<html lang="en">
<head>
   

</head>
<body>
    <form method="post" action="">
        Number: <input type="number" name="num" required>
                <input type="submit" name="Submit" >
    </form>

    <?php

    // if($isset($_POST['Submit'])){ code }
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $num=$_POST['num'];

   


    //recursive
    function fabonacci1($num){

        if($num<=1){
            return $num;
        }
        else{
            return fabonacci1($num-1) + fabonacci1($num-2);
        }
    }

    //with out recursive
    function fabonacci2($num){

        $no1=0;
        $no2=1;

        for($i=1;$i<=$num;$i+=1){
            echo $no1 ."  ";
            $temp=$no1;
            $no1=$no2;
            $no2=$temp+$no1;
        }

    }


    echo "fabonacci with recursion" ."<br>";
    $start=microtime(true);
    for($i=0;$i<$num;$i++){
    echo fabonacci1($i)." ";
    }
    $end=microtime(true);
    $mc1=$end-$start;


    echo "<br>"."fabonacci with out recursion" ."<br>";
    $start=microtime(true);
    fabonacci2($num);
    $end=microtime(true);
    $mc2=$end-$start;

    echo "<br>"."MC of fabonacci 1 is $mc1"."<br>" ."MC of fabonacci 2 is $mc2";
    
    if($mc1>$mc2){
        echo "<br>"."fabonacci with out recursion is faster";
    }
    elseif($mc1<$mc2){
        echo "fabonacci with recursion is faster";
    }
    else{
        echo "both are better";
    }
    }

    ?>
</body>
</html>