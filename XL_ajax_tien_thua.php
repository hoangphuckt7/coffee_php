<?php 
include("models/m_hoa_don.php");
$gt_nhap=$_POST["gt_nhap"];
$ma_hoa_don=$_POST["ma_hoa_don"];

$m_hoa_don=new M_hoa_don();
$hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
$kq=0;
if($gt_nhap>=$hoa_don->tong_tien)
{
	$kq=$gt_nhap-$hoa_don->tong_tien;	
}
echo number_format($kq)." đ";
//echo $gt_nhap;
?>