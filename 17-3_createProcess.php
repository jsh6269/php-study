<?php 
    file_put_contents('URL_data/'.$_POST['title'], $_POST['content']);
    header('Location: /17-1_urlParam.php?id='.$_POST['title']);
?>