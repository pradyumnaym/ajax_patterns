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
            $flag = 1;
            $media =0;
            $name = 0;
            if($type=="Video"){
                if($caption=="Bad Boys Trailer"){
                    $media = fopen("v1.mov", "rb");
                    $name = "v1.mov";
                } else {
                    $media = fopen("v2.mov", "rb");
                    $name = "v2.mov";

                }
                header("Content-type: video/quicktime");
            }elseif($type=="Image"){
                if($caption=="Dolittle Poster"){
                    $media = fopen("i1.jpg", "rb");
                    $name = "i1.jpg";
                }else{
                    $media = fopen("i2.jpg", "rb");
                    $name = "i2.jpg";
                }
                header("Content-type: image/jpg");
            }else{
                if($caption=="Dolittle OST"){
                    $media = fopen("a1.mp3", "rb");
                    $name = "a1.mp3";
                }else{
                    $media = fopen("a2.mp3", "rb");
                    $name = "a2.mp3";
                }
                header("Content-type: audio/mp3");
            }
            echo fread($media, filesize($name));
        }
    }
    if($flag==0){
        $media = fopen("v1.mov", "rb");
        header("Content-type: video/quicktime");
        echo file_get_contents($media);
    }
        
    fclose($file);
?>