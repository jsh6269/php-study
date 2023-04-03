<?php 
    file_put_contents('URL_data/'.$_POST['title'], $_POST['content']);
    echo "Article: ".$_POST['title']." is written";
?>