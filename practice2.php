
<html>
    <body>
        <h1>EECS 348 Practice 2</h1>
    </body>
</html>
<?php
    $border_r = $_POST["border_r"];
    $border_g = $_POST["border_g"];
    $border_b = $_POST["border_b"];
    $border_w = $_POST["border_size"];
    $back_r = $_POST["back_r"];
    $back_g = $_POST["back_g"];
    $back_b = $_POST["back_b"];
    printf('<p style="background-color:rgb(%s,%s,%s);border: %spx solid rgb(%s,%s,%s);">Paragraph to be edited.</p>', $back_r, $back_g, $back_b, $border_w, $border_r, $border_g, $border_b);
?>


<!DOCTYPE html>
<html>
<body>
        <form method="POST">
            Border R(0-255): 
            <input type="text" name="border_r" value=<?php echo $border_r?>><br>
            Border G(0-255):
            <input type="text" name="border_g" value=<?php echo $border_g?>><br>
            Border B(0-255):
            <input type="text" name="border_b" value=<?php echo $border_b?>><br>
            Border Width:
            <input type="text" name="border_size" value=<?php echo $border_w?>><br>
            Background R(0-255):
            <input type="text" name="back_r" value=<?php echo $back_r?>><br>
            Background G(0-255):
            <input type="text" name="back_g" value=<?php echo $back_g?>><br>
            Background B(0-255):
            <input type="text" name="back_b" value=<?php echo $back_b?>><br>
              
            <input type="Submit" 
                value="Change the color!">
        </form>
</body>
</html>