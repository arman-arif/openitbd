<?php
class Database extends Connection
{
    public function __construct()
    {
       parent::__construct();
    }

    public function getData($table)
    {
        $sql = "SELECT * FROM " . $table;
        $result = $this->query($sql);
        if ($result) {
            return $result;
        } else {
            die("<h4 style='color: red'>Query Failed!</h4>" . $this->error);
        }
    }

    public function insertSliderData($data, $image)
    {
        $sql = "INSERT INTO tbl_slider(title, image, txt_top, txt_middle, txt_bottom, btn_left_txt, btn_left_url, btn_right_txt, btn_right_url, visibility, date_added)
                VALUES ('$data[title]', '$image', '$data[txt_top]', '$data[txt_middle]', '$data[txt_bottom]', '$data[btn_left_txt]', '$data[btn_left_url]', '$data[btn_right_txt]', '$data[btn_right_url]', '$data[visibility]', NOW())";
        $result = $this->query($sql);
        if ($result) {
            $_SESSION['message'] = "New slider added successfully";
            exit('<script>window.location.replace("slider.php");</script>');
        } else {
            die("<h4 style='color: red'>Query Failed!</h4>" . $this->error);
        }
    }

    public function publishData($table, $id){
        $sql = "UPDATE '$table' SET visibility = 1 WHERE id = " . $id;
        $result = $this->query($sql);
        if ($result){
            $_SESSION['message'] = "published";
        } else {
            die("Query failed: " . $this->error . __LINE__);
        }
    }

}