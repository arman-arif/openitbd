
<?php
include 'include/header.php';


$path = ($page == "home") ? "home.php" : "";
$path = ($page == "courses") ? "views/courses-content.php" : "$path";

require $path;



include 'include/footer.php';
