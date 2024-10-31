<?php
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
		//models
			include("pager_quan_tri.php");
			include("models/m_san_pham.php");
			include("models/m_loai_san_pham.php");
			$m_san_pham=new M_san_pham();
			$ds_san_pham=$m_san_pham->Doc_san_pham();
			$limit=5;
			$count=count($ds_san_pham);
			$pager=new Pager();
			$vt=$pager->findStart($limit);
			$pages=$pager->findPages($count,$limit);
			$currentpage=$_GET["page"];
			$phan_trang=$pager->pageList($currentpage,$pages);
			$ds_san_pham=$m_san_pham->Doc_san_pham($vt,$limit);
			
			$m_loai_san_pham=new M_loai_san_pham();
			$ds_loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham();
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Danh sách sản phẩm";
			$view="views/san_pham/v_doc_san_pham.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_san_pham",$ds_san_pham);
			$smarty->assign("phan_trang",$phan_trang);
			$smarty->assign("ds_loai_san_pham",$ds_loai_san_pham);
			$smarty->display("layout.tpl");	
	}
	
	
	public function Them_san_pham()
	{
		//models
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$ds_loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham();
			if(isset($_POST["btn_them_san_pham"]))
			{
				$ten_san_pham=$_POST["ten_san_pham"];
				$ma_loai=$_POST["ma_loai"];
				$don_gia=$_POST["don_gia"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				include("models/m_san_pham.php");
				$m_san_pham=new M_san_pham();
				$kq=$m_san_pham->Them_san_pham($ten_san_pham, $ma_loai, $don_gia, $hinh);
				if($kq)
				{
					if($hinh !="")
					{
						move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/$hinh");	
					}
					
					echo "<script>alert('Thêm thành công!');window.location='xem_ds_san_pham.php'</script>"	;
				}
			}
			
			if(isset($_POST["btn_bo_qua"]))
			{
				header("location:xem_ds_san_pham.php");	
			}
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Thêm sản phẩm";
			$view="views/san_pham/v_them_san_pham.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_loai_san_pham",$ds_loai_san_pham);
			$smarty->display("layout.tpl");
	}
	
	
	
	public function Cap_nhat_san_pham()
	{
		//models
			include("models/m_loai_san_pham.php");
			include("models/m_san_pham.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$ds_loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham();
			$ma_san_pham=$_GET["ma_san_pham"];
			$m_san_pham=new M_san_pham();
			$san_pham_theo_ma_san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
			
			if(isset($_POST["btn_sua_san_pham"]))
			{
				$ten_san_pham=$_POST["ten_san_pham"];
				$ma_loai=$_POST["ma_loai"];
				$don_gia=$_POST["don_gia"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$kq=$m_san_pham->Sua_san_pham($ma_san_pham,$ten_san_pham, $ma_loai, $don_gia, $hinh);
				if($kq)
				{
					if($hinh !="")
					{
						move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/$hinh");	
					}
					echo "<script>alert('Đã cập nhật!');window.location='xem_ds_san_pham.php'</script>"	;
				}
			}
			
			if(isset($_POST["btn_bo_qua"]))
			{
				header("location:xem_ds_san_pham.php");	
			}
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Cập nhật sản phẩm";
			$view="views/san_pham/v_sua_san_pham.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_loai_san_pham",$ds_loai_san_pham);
			$smarty->assign("san_pham_theo_ma_san_pham",$san_pham_theo_ma_san_pham);
			$smarty->display("layout.tpl");	
	}
	
	public function Xoa_san_pham()
	{
		//models
			include("models/m_san_pham.php");
			$ma_san_pham=$_GET["ma_san_pham"];
			$m_san_pham=new M_san_pham();
			$kq=$m_san_pham->Xoa_san_pham($ma_san_pham);
			if($kq)
			{
				echo "<script>window.location='xem_ds_san_pham.php';alert('Đã Xóa!')</script>"	;
			}	
	}
	
}
?>