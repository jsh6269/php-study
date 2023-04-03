<!DOCTYPE html>
<html>
<body>
    <h1>Switch</h1>
    <?php 
        $color = "green";
        switch($color){
            case "red":
                echo "rose";
                break;
            case "blue":
                echo "sky";
                break;
            case "green":
                echo "grass";
                break;
            default:
                echo "?";
        }
    ?>
</body>
</html>