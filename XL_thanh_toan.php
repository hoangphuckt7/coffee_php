<?php
include("models/m_hoa_don.php");
include("models/m_ban.php");
$ma_hoa_don=$_POST["db_thanh_toan"];
$m_hoa_don=new M_hoa_don();
$hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
$ma_ban=$hoa_don->ma_ban;
$trang_thai=1;

$m_hoa_don->Sua_hoa_don($ma_hoa_don,$trang_thai);

$m_ban=new M_ban();
$m_ban->Sua_ban($ma_ban,0); //bật trang thái về 0:không có người ngồi
header("location:staff.php?var_hoa_don=1");
?>