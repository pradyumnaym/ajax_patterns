<script>
parent.update(`<?php
    extract($_POST);
    error_reporting(E_ALL);
    $file = fopen("data.csv", "r") or die("Error opening the file!");
    $flag = 0;
    while(!feof($file)){
        $line = fgets($file);
        $arr = explode(",", $line);
        if($ambience == $arr[0] && $cuisine == $arr[1] && $location == $arr[2] && $valet == $arr[3]){
            echo $arr[4]."#".$arr[5]." ; ";
            $flag = 1;
        }
    }
    if($flag==0)
        echo "No Match Found!";
    fclose($file);
?>`);
</script>