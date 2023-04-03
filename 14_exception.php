<!DOCTYPE html>
<html>
<body>
    <h1>Exception</h1>
    <?php 
        function divide($a, $b){
            if($b == 0){
                throw new Exception("cannot divide by 0");
            }
            echo $a / $b;
        }

        try {
            divide(3, 0);
        } catch(Exception $e){
            echo "unable to divide<br>";
        } finally {
            echo "process ended";
        }
    ?>
</body>
</html>