<!DOCTYPE html>
<html>
<body>
    <h1>Ternary Operation</h1>
    <?php 
        $score = 50;
        echo $score > 80 ? "pass":"fail";

        $arr = array(4, 1, 5);
        $maxNum = ($arr[0] > $arr[1] ? $arr[0]:$arr[1]) > $arr[2] ? ($arr[0] > $arr[1] ? $arr[0]:$arr[1]):$arr[2];
        echo "<br>", $maxNum;
    ?>
</body>
</html>
