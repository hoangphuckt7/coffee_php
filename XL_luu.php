<?php
include("models/m_hoa_don.php");
include("models/m_ban.php");
date_default_timezone_set("Asia/Bangkok");
$ngay=date("Y-m-d");

echo $ngay;
$ma_ban=$_POST["ma_ban"];
$arr_so_luong=$_POST["db_so_luong"];
$arr_ma_san_pham=$_POST["db_ma_san_pham"];
$arr_ten_san_pham=$_POST["db_ten_san_pham"];
$arr_don_gia=$_POST["db_don_gia"];
$trang_thai=0; //khi lưu thì chưa thanh toán nên đặt là 0
$mang_ve="";
if(isset($_POST["chk_mang_ve"])) $mang_ve=$_POST["chk_mang_ve"];


//lấy tên bàn
$m_ban=new M_ban();
$ban=$m_ban->Doc_ban_theo_ma_ban($ma_ban);
$ten_ban=$ban->ten_ban;
//tính tổng tiền
$length=0;
foreach($arr_so_luong as $sl)
{
	$length++;
}
$tong_tien=0;
for($i=0;$i<$length;$i++)
{
	$tong_tien+=($arr_so_luong[$i]*$arr_don_gia[$i]);
}

//echo $tong_tien;
//Sửa bàn trang thai sang 1
$m_ban->Sua_ban($ma_ban,1);

//Thêm hóa đơn
$m_hoa_don=new M_hoa_don();
$last_ma_hoa_don=$m_hoa_don->Them_hoa_don($ngay,$ma_ban,$ten_ban,$trang_thai,$tong_tien,$mang_ve);
//echo $last_ma_hoa_don;

//Thêm chi tiết hóa đơn
for($i=0;$i<$length;$i++)
{
	$m_hoa_don->Them_chi_tiet_hoa_don($last_ma_hoa_don,$arr_ma_san_pham[$i],$arr_ten_san_pham[$i],$arr_so_luong[$i],$arr_don_gia[$i]);
}
header("location:staff.php?var_hoa_don=1");
?>