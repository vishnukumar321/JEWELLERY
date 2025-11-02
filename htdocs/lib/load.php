<?php
include_once "includes/database.class.php";
include_once "includes/session.class.php";
include_once "includes/img_slider.class.php";
include_once "includes/collection_upload.class.php";
include_once "includes/img_slider_upload.class.php";
global $conf_data;
$conf_data=file_get_contents($_SERVER['DOCUMENT_ROOT']."/jewellery/project/confic.json");
function get_conf($name){
    global $conf_data;
    $data=json_decode($conf_data,true);
    if(isset($data[$name])){
        return $data[$name];
    }else{
        echo "there are no data called $name";
    }
}
function get_file($file){
    include $_SERVER['DOCUMENT_ROOT'].get_conf("documentroot")."template/_$file.php";
}
?>