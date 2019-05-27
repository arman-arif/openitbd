<?php
class Functions
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
    }

    public function uploadImage($data, $key, $path="images"){
        $file_name = $data[$key]['name'];
        $directory = $_SERVER['DOCUMENT_ROOT'] . "/openitbd.dev/uploads/";
        $tmp = explode('.',$file_name);
        $ext = end($tmp);
        $unique_name = $path . '_';
//        $unique_name .= substr(md5(time()),0,6) . '_';
//        $unique_name .= substr(md5(rand()),0,6) . '_';
        $unique_name .= substr(md5($file_name),0,12) .'.'.$ext;

        $file_size = $data[$key]['size'];
        $upload_file = $directory . $path . "/" . $unique_name;
        $file_type = $data[$key]['type'];
        $tmp_file = $data[$key]['tmp_name'];

        if (empty($file_name)){
            $_SESSION['err_msg'] = "No image file selected";
        } else {
            if ($file_type == "image/jpeg" || $file_type == "image/png"){
                if($file_size > 5242880){
                    $_SESSION['err_msg'] = "File is too learge";
                } else {
                    if (file_exists($upload_file)){
                        $_SESSION['err_msg'] = "File already exists";
                    } else {
                        if (move_uploaded_file($tmp_file, $upload_file)){
                            return $unique_name;
                        } else {
                            return false;
                        }
                    }
                }
            } else {
                $_SESSION['err_msg'] = "Invalid file format";
            }
        }
    }

    public function validateData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);

        return $data;
    }

    public function validateArray($array){
        foreach ($array as $key => $value){
            $array[$key] = $this->validateData($value);
        }

        return $array;
    }

    public function textShorten($text, $limit){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text."...";
        return $text;
    }

    public function formatDate($date){
        return date('d F, Y', strtotime($date));
    }
    public function formatDatetime($date){
        return date('F d, Y, g:i a', strtotime($date));
    }

}