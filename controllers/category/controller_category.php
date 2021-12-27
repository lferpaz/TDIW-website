<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/category/select_category.php";

$connection = connect_db();
$categories = select_category($connection);

include_once __DIR__."/../../views/category/category_list.php";

?>