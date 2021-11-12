<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/category/select_category.php";

$connection = connect_db();
$categories = select_category($connection);

include_once __DIR__."/../views/category_list.php";

?>