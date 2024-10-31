<?php
class C_loai_san_pham
{
	public function Hien_thi_loai_san_pham()
	{
		//models
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$ds_loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham();
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Danh sách loại sản phẩm";
			$view="views/loai_san_pham/v_doc_loai_san_pham.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_loai_san_pham",$ds_loai_san_pham);
			$smarty->display("layout.tpl");	
	}
	
	
	public function Them_loai_san_pham()
	{
		//models
			if(isset($_POST["btn_them_loai"]))
			{
				$ten_loai=$_POST["ten_loai"];
				include("models/m_loai_san_pham.php");
				$m_loai_san_pham=new M_loai_san_pham();
				$kq=$m_loai_san_pham->Them_loai_san_pham($ten_loai);
				if($kq)
				{
					echo "<script>alert('Thêm thành công!');window.location='xem_ds_loai_san_pham.php'</script>";
				}
				
			}
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_loai_san_pham.php");
		
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Thêm Loại sản phẩm";
			$view="views/loai_san_pham/v_them_loai_san_pham.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->display("layout.tpl");
	}
	
	
	public function Cap_nhat_loai_san_pham()
	{
		//models
			include("models/m_loai_san_pham.php");
			$ma_loai=$_GET["ma_loai"];
			$m_loai_san_pham=new M_loai_san_pham();
			$san_pham_theo_ma_loai=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
			
			if(isset($_POST["btn_cap_nhat"]))
			{
				$ten_loai=$_POST["ten_loai"];
				$kq=$m_loai_san_pham->Sua_loai_san_pham($ma_loai,$ten_loai);
				if($kq)
				{
					echo "<script>alert('Đã cập nhật!');window.location='xem_ds_loai_san_pham.php'</script>";	
				}	
			}
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_loai_san_pham.php");
			
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Cập nhật Loại sản phẩm";
			$view="views/loai_san_pham/v_sua_loai_san_pham.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("san_pham_theo_ma_loai",$san_pham_theo_ma_loai);
			$smarty->display("layout.tpl");
	}
	
	
	public function Xoa_loai_san_pham()
	{
		//models
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$ma_loai=$_GET["ma_loai"];
			$kq=$m_loai_san_pham->Xoa_loai_san_pham($ma_loai);
			if($kq)
			{
				echo "<script>window.location='xem_ds_loai_san_pham.php';alert('Đã xóa!')</script>";	
			}	
	}
}
?>