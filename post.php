<?php

#TEST FILE
generic_get_json_data_by_url($argv[1]); 


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