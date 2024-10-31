<?php
class C_lau
{
	public function Hien_thi_lau()
	{
		//models
			include("models/m_lau.php");
			$m_lau=new M_lau();
			$ds_lau=$m_lau->Doc_lau();
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Danh sách lầu";
			$view="views/lau/v_doc_lau.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_lau",$ds_lau);
			$smarty->display("layout.tpl");	
	}
	
	public function Them_lau()
	{
		//models
			if(isset($_POST["btn_them_lau"]))
			{
				$ten_lau=$_POST["ten_lau"];
				include("models/m_lau.php");
				$m_lau=new M_lau();
				$kq=$m_lau->Them_lau($ten_lau);
				if($kq)
				{
					echo "<script>alert('Thêm thành công!');window.location='xem_ds_lau.php'</script>"	;
				}
			}
			
			if(isset($_POST["btn_bo_qua"]))
			{
				header("location:xem_ds_lau.php");	
			}
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Thêm lầu";
			$view="views/lau/v_them_lau.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->display("layout.tpl");

	}	
	
	public function Cap_nhat_lau()
	{
		//models
			include("models/m_lau.php");
			$m_lau=new M_lau();
			$ma_lau=$_GET["ma_lau"];
			$lau_theo_ma_lau=$m_lau->Doc_lau_theo_ma_lau($ma_lau);
			if(isset($_POST["btn_cap_nhat"]))
			{
				$ten_lau=$_POST["ten_lau"];
				$kq=$m_lau->Sua_lau($ma_lau,$ten_lau);
				if($kq)
				{
					echo "<script>alert('Đã cập nhật!');window.location='xem_ds_lau.php'</script>"	;
				}	
			}
			
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_lau.php");
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Cập nhật lầu";
			$view="views/lau/v_sua_lau.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("lau_theo_ma_lau",$lau_theo_ma_lau);
			$smarty->display("layout.tpl");
			
	}
	
	public function Xoa_lau()
	{
		//models
			include("models/m_lau.php");
			$m_lau=new M_lau();
			$ma_lau=$_GET["ma_lau"];
			$kq=$m_lau->Xoa_lau($ma_lau);
			if($kq)
			{
				echo "<script>alert('Đã Xóa!');window.location='xem_ds_lau.php'</script>"	;
			}
	}
}
?>