<!DOCTYPE html>
<html>
<body>
    <h1>Loop</h1>
    <?php 
        for($i=0; $i<5; $i++){
            echo "num: ", $i, "<br>";
        }

        echo "<br>-----------------<br>";
        $i = 0;
        while($i <5){
            echo "num: ", $i, "<br>";
            $i++;
        }

        echo "<br>-----------------<br>";
        $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        foreach($arr as $var){
            echo (string)$var." ";
        }
    ?>
</body>
</html>