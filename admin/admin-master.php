<?php
session_start();
require 'class/Functions.php';
require 'class/Database.php';

$ofn = new Functions();
$odb = new Database();

require "include/header.php";


$path = ($page == "dashboard") ? "dashboard.php" : "";
$path = ($page == "courses") ? "pages/courses-content.php" : "$path";
$path = ($page == "add-courses") ? "pages/add-courses-content.php" : "$path";
$path = ($page == "slider") ? "pages/slider-content.php" : "$path";
$path = ($page == "add-slider") ? "pages/add-slider-content.php" : "$path";
$path = ($page == "update-slider") ? "pages/update-slider-content.php" : "$path";

require $path;



require "include/footer.php";
