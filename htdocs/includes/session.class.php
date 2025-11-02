<?php
class session{
    public static function now_path(){
        // return basename($_SERVER['REQUEST_URI'],".php");
        return $_SERVER['REQUEST_URI'];
    }
    public static function file_upload(){
        
    }
}
?>