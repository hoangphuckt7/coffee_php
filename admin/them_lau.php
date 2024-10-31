<?php
session_start();
include("controllers/c_lau.php");
$c_lau= new C_lau();
$c_lau->Them_lau();
?>	