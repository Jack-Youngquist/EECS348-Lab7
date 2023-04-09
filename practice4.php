<!DOCTYPE html>
<html>
<body>
        <h1>EECS 348 Practice 4</h1> 
        <form method="POST">
            Enter a number: 
            <input type="text" name="number">
              
            <input type="Submit" 
                value="Get Multiplication Table">
        </form>
</body>
</html>
  
<?php
if($_POST) {
    $num = $_POST["number"];
  
    echo ("<p>Multiplication Table of $num: </p>
    ");
    $row = 0;
    echo"<table border = '1'>";
    for ($i = 1; $i <= $num; $i++) {
        $row += 1;
        $col = 0;
        echo "<tr>";
        for ($j = 1; $j <= $num; $j++) {
            $col += 1;
            $value = ($row * $col);
            echo ("<td>$value</td>");
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>