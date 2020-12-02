<?php
    error_reporting(E_ALL);
    extract($_GET);
    file_put_contents("abc.txt", $branch);
    $json = json_decode(file_get_contents("seats.json"), true);
    if($json[$branch]>0) 
        $json[$branch]-=1;
    file_put_contents("seats.json", json_encode($json));
?>
