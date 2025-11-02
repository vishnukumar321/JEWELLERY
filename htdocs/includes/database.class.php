<?php
class database{
    public static $conn=false;
    public static function get_conn(){
        if(!database::$conn){
            $sname="localhost";
            $uname="jewellery";
            $pass="password";
            $db="jewellery";
            $conn=new mysqli($sname,$uname,$pass,$db);
            if($conn->connect_error){
                die("connection error".$conn->connect_error);
            }else{
                return database::$conn=$conn;
            }
        }else{
            return database::$conn;
        }
    }
}
?>