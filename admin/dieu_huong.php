<?php
session_start();
include("models/m_user.php");
if(isset($_POST["login"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	$m_user=new M_user();
	$kq=$m_user->Doc_user_voi_username_va_password($username,$password);
	if($kq !=NULL)
	{
		if($kq->phan_quyen ==0)
		{
			$_SESSION["fullname"]=$kq->fullname;
			header("location:../staff.php")	;
		}
		else
		{
			$_SESSION["fullname"]=$kq->fullname;
			header("location:quan_tri.php");	
		}
	}
	else
	{
		$_SESSION["err"]="Bạn nhập tài khoản hoặc mật khẩu không đúng!";
		
		header("location:login.php");	
	}
	
	
}

?>