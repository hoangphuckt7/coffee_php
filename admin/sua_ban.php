<?php
session_start();
include("controllers/c_ban.php");
$c_ban=new C_ban();
$c_ban->Cap_nhat_ban();
?>