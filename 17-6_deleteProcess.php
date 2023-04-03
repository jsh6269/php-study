<?php 
    unlink('URL_data/'.basename($_POST['id']));
    header('Location: /17-1_urlParam.php');
?>