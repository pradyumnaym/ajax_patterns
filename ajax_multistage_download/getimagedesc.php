<?php
    error_reporting(E_ALL);
    extract($_GET);
    if($img=="img1.jpeg"){
        echo "image 1 description";
    }else{
        echo "image not 1 description";
    }
?>