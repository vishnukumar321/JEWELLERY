<?php
include_once "lib/load.php";
include_once __DIR__ . "/../traits/sqlgetterandsetter.trait.php";
class product_img
{

    use GetterandSetter;
    public $col = false;
    public $table = false;
    public $conn = false;
    public $id = false;
    public static function slider_img_uploader($image_tmp,$title,$price)
    {
       try{
        $image_name = md5(time()) . image_type_to_extension(exif_imagetype($image_tmp[0]));
        $img_access_path = "/test.php?name=" . $image_name;
        $img_to_path = $_SERVER['DOCUMENT_ROOT'] . get_conf("documentroot") . "img_upload/";
        if (move_uploaded_file($image_tmp[0], $img_to_path . $image_name)) {
            $conn = database::get_conn();
            $sql = "INSERT INTO `header_sliders` (`url`) VALUES ('$img_access_path');";
            if ($conn->query($sql) == true) {
                return true;
            }else{
                throw new Exception("can not upload the slider image in  ".__CLASS__.__LINE__);
            }
        } else {
            throw new Exception("can not upload the slider image in ".__CLASS__.__LINE__);
        }
       }catch(Exception $e){
        return false;
       }
    }
    public function __construct($id,$table=null)
    {
        $this->id = $id;
        $this->table = $table;
        $this->conn = database::get_conn();
    }
}
