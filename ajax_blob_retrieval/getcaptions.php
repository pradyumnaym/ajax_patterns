<?php
    extract($_GET);
    error_reporting(E_ALL);
    $file = fopen("details.txt", "r") or die("Error opening the file!");
    $flag = 0;
    $folder = "/home/student/data/";
    while(!feof($file)){
        $line = fgets($file);
        $arr = explode(",", $line);
        if($type == $arr[0] && $caption == $arr[1]){
            echo str_replace(",", "<br>", $line);
        }
    }
    if($flag==0){
        echo "No caption found!";
    }
        
    fclose($file);
?>