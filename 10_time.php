<!DOCTYPE html>
<html>
<body>
    <h1>Time</h1>
    <?php 
        // 서울 표준시 가져오기
        date_default_timezone_set("Asia/Seoul");
        echo date('Y년 m월 d일 (l) H시 i분 s초')."<br>";

        // 로컬타임 가져오기
        $arr = localtime();
        $des = array('초', '분', '시', '일', '월', '년', '요일');
        $day = array('일', '월', '화', '수', '목', '금', '토');

        $arr[4]++; // 1월은 0으로 표현되기 때문
        $arr[5]+=1900; // 1900년 이후로 흐른 연도를 표현하기 때문
        $arr[6] = $day[$arr[6]];

        for($i=5; $i>=0; $i--){
            echo $arr[$i], $des[$i], ' ';
        }
        echo "($arr[6]$des[6])<br>";

        // time
        echo "1970년 1월 1일 0시 0분 0초부터 지금까지 ", time(), "초 흐름<br><br>";
        
        // usleep은 microsec 단위로 sleep
        $t1 = microtime(true);
        usleep(pow(10, 5));
        $t2 = microtime(true);

        echo $t2-$t1, " sec<br>";

        // sleep은 sec 단위로 sleep
        $t1 = microtime(true);
        sleep(1);
        $t2 = microtime(true);

        echo $t2-$t1, " sec";


    ?>
</body>
</html>