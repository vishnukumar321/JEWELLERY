<?php
include_once 'lib/load.php';

trait GetterandSetter
{
    public function __call($name, $args)
    {
        try {
            $data = substr($name, 3);
            if (substr($name, 0, 3) == 'get') {
                return $this->get_data($data);
            } elseif (substr($name, 0, 3) == 'set') {
                return $this->set_data($data, $args[0]);
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function get_data($name)
    {
        if (!$this->conn) {
            $this->conn = database::get_conn();
        }
        $conn = $this->conn;
        $table=$this->table;
        $sql = "SELECT `$name` FROM `$table` WHERE `id` = '$this->id'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row[$name];
        } else {
            throw new Exception("there are no data named $name in " . __CLASS__ . __LINE__);
        }
    }

    public function set_data($name, $arg)
    {
        if (!$this->conn) {
            $this->conn = database::get_conn();
        }
        $conn = $this->conn;
        $table=$this->table;
        $sql = "UPDATE `$table` SET `$name` = '$arg' WHERE `id` = '$this->id';";
        if($conn->query($sql)){
            return true;
        }else{
            throw new Exception("can not updata data named $name in ".__CLASS__.__LINE__);
        }
    }

    //     INSERT INTO `header_sliders` (`id`, `image`, `movie_title`, `movie_genre`)
    // VALUES ('1', 'image1', 'title1', 'genre1');
}
?>