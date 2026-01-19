<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form method="post" action="">
        Start: <input type="number" name="start" required > <br>
        End  : <input type="number" name="end" reqenduired >  <br>
        <input type="submit" value="Prime Check">
        </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $start=$_POST['start'];
            $end=$_POST['end'];

            for($i=$start;$i<$end;$i=$i+1){
                if($i<2)continue;
                $prime=0;
                for($j=2;$j<$i;$j=$j+1){
                    if($i % $j == 0){
                        $prime=1;
                        break;
                    }
                }
            if($prime == 0)echo "$i     ";
            }
        }   
    ?>
</body>
</html>