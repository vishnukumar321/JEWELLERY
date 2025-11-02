<?php
include_once "lib/load.php";
include_once __DIR__ . "/../traits/sqlgetterandsetter.trait.php";
class slider_img
{

    use GetterandSetter;
    public $col = false;
    public $table = false;
    public $conn = false;
    public $id = false;
    public static function slider_img_uploader($image_tmp)
    {
       try{
        $image_name = md5(time()) . image_type_to_extension(exif_imagetype($image_tmp));
        $img_access_path = "/test.php?name=" . $image_name;
        $img_to_path = $_SERVER['DOCUMENT_ROOT'] . get_conf("documentroot") . "img_upload/";
        if (move_uploaded_file($image_tmp, $img_to_path . $image_name)) {
            $conn = database::get_conn();
            $sql = "INSERT INTO `header_sliders` (`url`) VALUES ('$img_access_path');";
            if ($conn->query($sql) == true) {
                echo "yes";
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
    public function __construct($id)
    {
        $this->id = $id;
        $this->table = "header_sliders";
        $this->conn = database::get_conn();
    }
    public static function getAllposts()
    {
        $conn = database::get_conn();
        $sql = "SELECT * FROM `header_sliders` ORDER BY `uploaded_time` DESC";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
}
