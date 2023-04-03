<!DOCTYPE html>
<html>
<body>
    <h1>Math</h1>
    <?php 
        echo pi(), "<br>";
        echo M_PI, "<br>";
        echo tan(pi()/4), "<br>";
        echo sin(pi()/6), "<br>";
        echo cos(pi()/6), "<br>";
        echo sqrt(3)/2, "<br>";
        echo pow(2, 10), "<br>";
        echo abs(-4.2), "<br>";
        echo exp(1), "<br>";
        echo M_E, "<br>";
        echo floor(3.4), "<br>";
        echo ceil(3.4), "<br>";
        echo round(3.4), "<br>";
        echo rad2deg(pi()), "<br>";
        echo deg2rad(180), "<br>";

        echo "<br>";
        echo getrandmax(), "<br>";
        echo rand(), "<br>";
        echo rand(1, 10), "<br>";
        echo mt_rand(1, 10), "<br>";

        // seed 고정
        srand(10);
        echo rand(), " ";
        echo rand(1, 10);
    ?>
</body>
</html>