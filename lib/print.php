<?php 
    function printList(){
        $list = scandir("./URL_data");
        foreach($list as $var){
            if($var != "." && $var != ".."){
                $title = htmlspecialchars($var);
                echo "<li><a href='17-1_urlParam.php?id=$title'>$title</a></li>\n";
            }
        }
    }

    function printTitle(){
        if(!isset($_GET['id'])){
            echo "Welcome";
        }
        else{
            echo htmlspecialchars($_GET['id']);
        }
    }

    function printContent(){
        if(!isset($_GET['id'])){
            echo "Hello, PHP";
        }
        else{
            echo htmlspecialchars(file_get_contents("URL_data/".basename($_GET['id'])));
        }
    }
?>