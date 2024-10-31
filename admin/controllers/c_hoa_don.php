<?php
class C_hoa_don
{
	public function Hien_thi_hoa_don()
	{
		//models
			include("models/m_hoa_don.php");
			include("pager_quan_tri.php");
			$m_hoa_don=new M_hoa_don();
			$ds_hoa_don=$m_hoa_don->Doc_hoa_don();
			$limit=7;
			$count=count($ds_hoa_don);
			$pager=new Pager();
			$vt=$pager->findStart($limit);
			$pages=$pager->findPages($count,$limit);
			$curpage=$_GET["page"];
			$phan_trang=$pager->pageList($curpage,$pages);
			$ds_hoa_don=$m_hoa_don->Doc_hoa_don($vt,$limit);
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Danh sách hóa đơn";
			$view="views/hoa_don/v_doc_hoa_don.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_hoa_don",$ds_hoa_don);
			$smarty->assign("phan_trang",$phan_trang);
			$smarty->display("layout.tpl");
	}
	
	public function Hien_thi_chi_tiet_hoa_don()
	{
		//models
			$ma_hoa_don=$_GET["ma_hoa_don"];
			include("models/m_hoa_don.php");
			$m_hoa_don=new M_hoa_don();
			$hoa_don_theo_ma_hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
			$chi_tiet_hoa_don_theo_ma_hoa_don=$m_hoa_don->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);
		
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Chi tiết hóa đơn";
			$view="views/hoa_don/v_doc_ct_hoa_don.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("chi_tiet_hoa_don_theo_ma_hoa_don",$chi_tiet_hoa_don_theo_ma_hoa_don);
			$smarty->assign("hoa_don_theo_ma_hoa_don",$hoa_don_theo_ma_hoa_don);
			$smarty->display("layout.tpl");	
	}
}
?>