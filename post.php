<?php

#TEST FILE

$url = "http://localhost:80/api/get_report?pubid=1&start_date=2020-01-01&end_date=2020-01-01&group_by=date";


generic_get_json_data_by_url($url); 

//echo "\nagrv[1]: ".$argv[1]."\n";

function generic_get_json_data_by_url($url){

    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $json_data= curl_exec($ch);
    if($json_data === false){
        echo "\nFALSE\n";
        return false;
    }
    echo $json_data;
    return true; 
}



?>
