<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
   <form method="post">
    Columns: <input type="number" name="num" required><br>
    Row:     <input type="number" name="nums" required><br>
             <input type="submit">
   </form> 

   <?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
        $row=$_POST['nums'];
        $column=$_POST['num'];
   }
   ?>
</body>
</html>