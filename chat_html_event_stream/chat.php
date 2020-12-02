<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    extract($_GET);
    date_default_timezone_set("Asia/Calcutta");
    $fp=fopen($file,"w");
    fclose($fp);
    $fp=fopen($file,"r");
    fseek($fp,0,SEEK_END);
    $oldtime=filemtime($file);
    while(true)
    {
        clearstatcache();
        $newtime=filemtime($file);
        if($newtime>$oldtime)
        {    
            $str=fread($fp,100);
            echo "data: $str \n\n";
            ob_flush();
            flush();
            $oldtime=$newtime;
            fseek($fp,0,SEEK_END);
        }
        sleep(1); 
    }
?>