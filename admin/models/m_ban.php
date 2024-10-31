<?php
include_once("models/database.php");
class M_ban extends database
{
	public function Doc_ban($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM ban";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_ban_theo_ma_lau($ma_lau)
	{
		$sql="SELECT * FROM ban WHERE ma_lau=?"	;
		$this->setQuery($sql);
		$parram=array($ma_lau);
		
		return $this->loadAllRows($parram);
	}	
	
	public function Doc_ban_theo_ma_ban($ma_ban)
	{	
		$sql="SELECT * FROM ban WHERE ma_ban=?"	;
		$this->setQuery($sql);
		$parram=array($ma_ban);
		
		return $this->loadRow($parram);
		
	}
	
	//Thêm,xóa,sửa
	//`ma_ban`, `ten_ban`, `trang_thai`, `ma_lau`
	public function Them_ban($ten_ban,$trang_thai,$ma_lau)
	{
		$sql="INSERT INTO ban ";
		$sql.="VALUES(?,?,?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$ten_ban,$trang_thai,$ma_lau);
		
		return $this->execute($parram);
	}
	
	
	
	public function Sua_ban($ma_ban,$ten_ban,$trang_thai,$ma_lau)
	{
		$sql="UPDATE ban SET ten_ban=?,trang_thai=?,ma_lau=? ";
		$sql.="WHERE ma_ban=?";
		$this->setQuery($sql);
		$parram=array($ten_ban,$trang_thai,$ma_lau,$ma_ban);
		return $this->execute($parram);	
	}	
	
	
	
	public function Xoa_ban($ma_ban)
	{
		$sql="DELETE FROM ban WHERE ma_ban=?";
		$this->setQuery($sql);
		$parram=array($ma_ban);
		
		return $this->execute($parram);	
	}	
}
?>