<?php
include_once "lib/load.php";
include_once __DIR__."/../traits/sqlgetterandsetter.trait.php";
class img_sliders{
    use GetterandSetter;
    public $id;
    public $table="header_sliders";
    public $conn;
    public function __construct($id){
        try{
            if(!$this->conn){
            $this->conn=database::get_conn();
        }
        $conn=$this->conn;
        $sql="SELECT * FROM `header_sliders` WHERE `id` = '$id'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $this->id=$row['id'];
        }else{
            throw new Exception("img_slider sql error in".__CLASS__.__LINE__);
        }
        }catch(Exception $e){
            return false;
        }
    }
}
?>