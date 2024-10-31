<?php
session_start();
class C_hoa_don_va_ban
{
	public function Hien_thi_ban()
	{
		//model
			include("models/m_lau.php");
			include("models/m_ban.php");
			include("models/m_loai_san_pham.php");
			include("models/m_hoa_don.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$ds_loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham();
			
			$m_lau=new M_lau();
			$ds_lau=$m_lau->Doc_lau();
			
			$ma_lau=$ds_lau[0]->ma_lau;
			if(isset($_GET["ma_lau"])) $ma_lau=$_GET["ma_lau"];
			$m_ban=new M_ban();
			$ds_ban_theo_lau=$m_ban->Doc_ban_theo_ma_lau($ma_lau);
			$ma_ban=0;
			$var_hoa_don=0;
			if(isset($_GET["var_hoa_don"]))  $var_hoa_don=$_GET["var_hoa_don"];
			//echo $ma_lau;
			
			//xử lý đọc những hóa đơn chưa thanh toán
			$m_hoa_don=new M_hoa_don();
			$ds_hoa_don_chua_thanh_toan=$m_hoa_don->Doc_hoa_don_theo_trang_thai(0);
			
			
		//view
			include("controllers/smarty_quan_ca_phe.php");
			$smarty=new Smarty_quan_ca_phe();
			$view="views/v_hoa_don_va_ban.tpl";
			$smarty->assign("view",$view);
			$smarty->assign("ds_lau",$ds_lau);
			$smarty->assign("ds_ban_theo_lau",$ds_ban_theo_lau);
			$smarty->assign("ds_loai_san_pham",$ds_loai_san_pham);
			
			$smarty->assign("ma_ban",$ma_ban);
			$smarty->assign("var_hoa_don",$var_hoa_don);
			$smarty->assign("ds_hoa_don_chua_thanh_toan",$ds_hoa_don_chua_thanh_toan);
			$smarty->display("layout.tpl");
	}	
}
?>