<?php
session_start();
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
	//models
		include("models/m_loai_san_pham.php");
		include("models/m_ban.php");
		include("models/m_hoa_don.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham();
		
		include("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$ds_san_pham=$m_san_pham->Doc_san_pham();
		
		$ma_loai=$ds_loai_san_pham[0]->ma_loai;
		if(isset($_GET["ma_loai"]))  $ma_loai=$_GET["ma_loai"];
		$ds_san_pham_theo_ma_loai=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);
		
		$ma_ban=0;
		if(isset($_GET['ma_ban']))
			$ma_ban = $_GET['ma_ban'];
		
		$m_ban=new M_ban();
		$ban_theo_ma_ban=$m_ban->Doc_ban_theo_ma_ban($ma_ban);
		//xử lý phần hóa đơn
		$m_hoa_don= new M_hoa_don();
		$ma_hoa_don=-1;		
			if(isset($_GET["ma_hoa_don"])) $ma_hoa_don=$_GET["ma_hoa_don"];
		$hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
		$ds_chi_tiet_hoa_don_theo_ma_hoa_don= $m_hoa_don->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);
	
	//view
		include("controllers/smarty_quan_ca_phe.php");
		$smarty=new Smarty_quan_ca_phe();
		$view="views/v_menu_thuc_uong.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_loai_san_pham",$ds_loai_san_pham);
		
		$smarty->assign("ds_san_pham",$ds_san_pham);
		$smarty->assign("ds_san_pham_theo_ma_loai",$ds_san_pham_theo_ma_loai);
		$smarty->assign("ma_ban", $ma_ban);
		$smarty->assign("ban_theo_ma_ban", $ban_theo_ma_ban);
		$smarty->assign("ma_hoa_don",$ma_hoa_don);
		$smarty->assign("hoa_don",$hoa_don);
		$smarty->assign("ds_chi_tiet_hoa_don_theo_ma_hoa_don",$ds_chi_tiet_hoa_don_theo_ma_hoa_don);
		$smarty->display("layout.tpl");	
	}
	
	
	

}
?>