<?php
if (!isset($action)) {
    $route = '../../index.php';
} else {
    $route = '../../index.php?action='.$action;
}
echo "<SCRIPT>
    alert(".$error.");
    window.location.replace(".$route.");
</SCRIPT>";

?>