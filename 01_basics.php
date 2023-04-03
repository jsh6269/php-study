<?php 
    // Integer
    echo 1; print(3);
    print '<br>'; print 4; print ' '; print 5;
    print("<br>");
    var_dump(1); echo '<br>';

    echo '--------------------------<br>';
    echo 2+3; echo '<br>';
    echo 3-2; echo '<br>';
    echo 2*2; echo '<br>';
    echo 6/2; echo '<br>';
    echo 7/3; echo '<br>';
    echo 2**3, "<br>";

    // Float
    echo '--------------------------<br>';
    echo 3.141592; echo '<br>';
    var_dump(3.141592); echo '<br>';
    echo (int)3.141592; echo "<br>";

    // Boolean
    echo '--------------------------<br>';
    var_dump(true); echo '<br>';
    var_dump(false); echo '<br>';
    var_dump(4==5); echo '<br>';
    var_dump(4.1==4.1); echo '<br>';

    // Null
    var_dump(null); echo '<br>';

    // String
    echo '--------------------------<br>';
    echo "'hello' \"world\"!<br>";
    echo 'PHP study<br>';
    echo "concat"." ".'operation';
    echo "<br>";
    echo strlen("Hello, world!");

    echo "<", "br", '>', "this", ' is', " echo!<br>";
    echo "<i>italic is fancy</i><br>";
    echo "<strong>good morning</strong>";

    $str = "
    this is string with several lines.
    You will understand what nl2br does
    ";
    // 문자열에 포함된 줄바꿈을 <br>로 간주함
    echo nl2br($str);
    echo "<strong>plain echo: </strong>", $str;
    echo "<br>"; var_dump($str);
?>
