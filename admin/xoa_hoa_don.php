<?php
include("models/m_hoa_don.php");
include("models/m_ban.php");
$ma_hoa_don=$_GET["ma_hoa_don"];
$m_hoa_don=new M_hoa_don();
$hoa_don_theo_ma_hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
$ma_ban=$hoa_don_theo_ma_hoa_don->ma_ban;

$m_ban=new M_ban();
$ban_theo_ma_ban=$m_ban->Doc_ban_theo_ma_ban($ma_ban);
$ma_lau=$ban_theo_ma_ban->ma_lau;
$ten_ban=$ban_theo_ma_ban->ten_ban;
$k=$m_ban->Sua_ban($ma_ban,$ten_ban,0,$ma_lau);  //bật trạng thái của bàn về trống rồi mới xóa hóa đơn
$kq=$m_hoa_don->Xoa_hoa_don($ma_hoa_don);
$m_hoa_don->Xoa_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);

if($kq && $k)
{
	echo "<script>window.location='xem_ds_hoa_don.php';alert('Đã Xóa!')</script>";	
}
?>