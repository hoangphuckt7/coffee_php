<?php
session_start();
include("controllers/smarty_quan_tri.php");
$smarty=new Smarty_quan_tri();
$smarty->display("layout.tpl");
?>