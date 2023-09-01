<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='../../index.php';</script>";
    }

?>