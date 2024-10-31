<?php
class C_user
{
	public function Hien_thi_user()
	{
		//models
			include("models/m_user.php");
			$m_user=new M_user();
			$ds_user=$m_user->Doc_user();
		//views	
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$view="views/user/v_doc_user.tpl";
			$title_content="Danh sách tài khoản";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_user",$ds_user);
			$smarty->display("layout.tpl");
	}
	
	public function Them_tai_khoan()
	{
		//models
			//`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `idcard`, `phone_number`, `phan_quyen`
			include("models/m_user.php");
			
			if(isset($_POST["btn_them_tai_khoan"]))
			{
				$username=$_POST["username"];
				$password=$_POST["password"];
				$fullname=$_POST["fullname"];
				$birthdate=$_POST["birthdate"];
				$gender=$_POST["gender"];
				$address=$_POST["address"];
				$email=$_POST["email"];
				$idcard=$_POST["idcard"];
				$phone_number=$_POST["phone_number"];
				$phan_quyen=$_POST["phan_quyen"];
				
				$m_user=new M_user();
				$kq=$m_user->Them_user($username, $password, $fullname, $birthdate, $gender, $address, $email, $idcard, $phone_number, $phan_quyen);
				if($kq)
				{
					echo "<script>alert('Thêm thành công!');window.location='xem_ds_tai_khoan.php'</script>";	
				}
			}
			
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_tai_khoan.php");
			
			
			
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$view="views/user/v_them_tai_khoan.tpl";
			$title_content="Thêm tài khoản";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->display("layout.tpl");		
	}
	
	
	
	public function Cap_nhat_tai_khoan()
	{
		//models
			include("models/m_user.php");
			$id=$_GET["id"];
			$m_user=new M_user();
			$user_theo_id=$m_user->Doc_user_theo_id($id);
			if(isset($_POST["btn_sua_tai_khoan"]))
			{
				$username=$_POST["username"];
				$password=$_POST["password"];
				$fullname=$_POST["fullname"];
				$birthdate=$_POST["birthdate"];
				$gender=$_POST["gender"];
				$address=$_POST["address"];
				$email=$_POST["email"];
				$idcard=$_POST["idcard"];
				$phone_number=$_POST["phone_number"];
				$phan_quyen=$_POST["phan_quyen"];
				$kq=$m_user->Sua_user($id,$username, $password, $fullname, $birthdate, $gender, $address, $email, $idcard, $phone_number, $phan_quyen);
				if($kq)
				{
					echo "<script>alert('Đã cập nhật!');window.location='xem_ds_tai_khoan.php'</script>";
				}	
			}
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_tai_khoan.php");
			
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$tiltle_content="Cập nhật tài khoản";
			$view="views/user/v_sua_tai_khoan.tpl";
			$smarty->assign("title_content",$tiltle_content);
			$smarty->assign("view",$view);
			$smarty->assign("user_theo_id",$user_theo_id);
			$smarty->display("layout.tpl");	
	}
	
	
	public function Xoa_tai_khoan()
	{
		//models
		include("models/m_user.php");
		$m_user=new M_user();
		$id=$_GET["id"];
		$kq=$m_user->Xoa_user($id);
		if($kq)
		{
			echo "<script>window.location='xem_ds_tai_khoan.php';alert('Đã xóa!')</script>";
		}
	
	}
}
?>