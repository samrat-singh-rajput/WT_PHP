<!DOCTYPE html>
<html lang="en">
<head>
    <title>Generated Table</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $row = $_POST['nums'];
        $column = $_POST['num'];

        echo "<table border='1'>";
        for ($i = 1; $i <= $row; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $column; $j++) {
                echo "<td>Row $i, Col $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } 
    ?>
</body>
</html>
