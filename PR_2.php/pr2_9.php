<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form method="post" action="">
    Table_OF: <input type="number" name="num" required><br>
             <input type="submit">
   </form>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];

        for($i=0;$i<=10;$i+=1){
            $sum=$num*$i;
            echo $num."*".$i."=".$sum." <br>";
        }
        
    }
    ?>

</body>
</html>