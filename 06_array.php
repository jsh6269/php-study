<!DOCTYPE html>
<html>
<body>
    <h1>Array</h1>
    <?php 
        echo "<i>"."\$arr = array('string', 4, true, 4.1, array(1, 2, false))"."</i><br><br>";
        $arr = array('string', 4, true, 4.1, array(1, 2, false));
        echo "<b>count(\$arr) = </b>", count($arr), "<br>";
        echo "<b>var_dump(\$arr) = </b>", var_dump($arr); echo "<br>";
        
        echo "<br><b>init</b><br>";
        echo json_encode($arr, JSON_PRETTY_PRINT), "<br>";

        echo "<br><b>pop & push 'graphite'</b><br>";
        array_pop($arr);
        array_push($arr, 'graphite');
        echo json_encode($arr, JSON_PRETTY_PRINT), "<br>";

        echo "<br><b>shift</b><br>";
        array_shift($arr);
        echo json_encode($arr, JSON_PRETTY_PRINT), "<br>";

        echo "<br><b>unshift 7</b><br>";
        array_unshift($arr, 7);
        echo json_encode($arr, JSON_PRETTY_PRINT), "<br>";

        echo "<br><b>implode by ' | '</b><br>";
        echo implode(" | ", $arr), "<br><br>";

        $arr2 = array('b'=>'blue', 'r'=>'red', 'g'=>'green');
        echo $arr2['r'], "<br>";
        var_dump($arr2); echo "<br><br>";
        
        foreach($arr2 as $key => $val){
            echo "pair($key, $val)<br>";
        }
?>
</body>
</html>