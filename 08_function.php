<!DOCTYPE html>
<html>
<body>
    <h1>Function</h1>
    <?php 
        function sum($a, $b){
            echo $a + $b;
            echo "<br>";
        }

        function recSum($var){
            if($var <= 0)
                return 0;    
            return $var + recSum($var-1);
        }

        sum(3, 4);
        $res = recSum(100);
        echo $res, "<br>";

        $add = function($a, $b){return $a + $b; };
        echo $add(1, 5), "<br>";

        $adder = fn($x, $y) => $x + $y;
        echo $adder(3, 6), "<br>";

        echo (fn($x, $y) => $x - $y)(6, 1);
    ?>
</body>
</html>