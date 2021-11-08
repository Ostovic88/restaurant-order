<?php require_once("admin/config/constants.php"); ?>
<?php 
//require_once("../partials/menu.php"); 
session_unset();
session_destroy();
//require_once("../partials/footer.php"); 
header("location:".SITEURL.'index.php');
?>