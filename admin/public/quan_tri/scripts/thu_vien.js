// JavaScript Document
function Xoa_user(id)
{
	var x=confirm("Hành động nãy sẽ làm mất dữ liệu!\n Bạn chắc chứ?");
	if(x==true)
	{
		window.location="xoa_user.php?id="+id;	
	}
	else
	{
		window.location="xem_ds_tai_khoan.php";		
	}
}

function Xoa_loai_san_pham(ma_loai)
{
	var x=confirm("Hành động nãy sẽ làm mất dữ liệu!\n Bạn chắc chứ?");
	if(x==true)
	{
		window.location="xoa_loai_san_pham.php?ma_loai="+ma_loai;	
	}
	else
	{
		window.location="xem_ds_loai_san_pham.php";		
	}
}

function Xoa_lau(ma_lau)
{
	var x=confirm("Hành động nãy sẽ làm mất dữ liệu!\n Bạn chắc chứ?");
	if(x==true)
	{
		window.location="xoa_lau.php?ma_lau="+ma_lau;	
	}
	else
	{
		window.location="xem_ds_lau.php";		
	}
}

function Xoa_ban(ma_ban)
{
	var x=confirm("Hành động nãy sẽ làm mất dữ liệu!\n Bạn chắc chứ?");
	if(x==true)
	{
		window.location="xoa_ban.php?ma_ban="+ma_ban;	
	}
	else
	{
		window.location="xem_ds_ban.php";		
	}
}


function Xoa_san_pham(ma_san_pham)
{
	var x=confirm("Hành động nãy sẽ làm mất dữ liệu!\n Bạn chắc chứ?");
	if(x==true)
	{
		window.location="xoa_san_pham.php?ma_san_pham="+ma_san_pham;	
	}
	else
	{
		window.location="xem_ds_san_pham.php";		
	}	
}

function Xoa_hoa_don(ma_hoa_don)
{
	var x=confirm("Hành động nãy sẽ làm mất dữ liệu!\n Bạn chắc chứ?");
	if(x==true)
	{
		window.location="xoa_hoa_don.php?ma_hoa_don="+ma_hoa_don;	
	}
	else
	{
		window.location="xem_ds_hoa_don.php";		
	}
}