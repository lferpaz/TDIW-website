<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/user/select_user_by_id.php";

$connection = connect_db();

$users = select_user_by_id($connection, $_GET['id']);

include_once __DIR__."/../../views/user/user_page.php";

?>