<?php
    error_reporting(E_ALL);
    extract($_GET);
    header("Content-type:image/jpeg");
    echo file_get_contents($img);
?>