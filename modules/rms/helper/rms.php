<?php
function api_load_user(){
    global $system;
$rms=$system['rms_url'];
if(empty(trim($rms))){
    print "No RMS URL.";
    exit();
}
$people_data=rms_get_data($rms,'nutty','people');
print_r($people_data);
}

function rms_get_data($rmsurl,$app_name,$data,$limit=null,$count=null){
    $target_url=$rmsurl."/api_connection.php?data=".$data."&app_name=".$app_name."&limit=".$limit."&count=".$count;
    $rawdata=file_get_contents($target_url);
    $json=json_decode($rawdata,true);
    return $json;
}