<?php
include_once("models/database.php");
class M_lau extends database
{
	public function Doc_lau()
	{
		$sql="SELECT * FROM lau";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_lau_theo_ma_lau($ma_lau)
	{
		$sql="SELECT * FROM lau WHERE ma_lau=?"	;
		$this->setQuery($sql);
		$parram=array($ma_lau);
		
		return $this->loadRow($parram);
	}
	public function Them_lau($ten_lau)
	{
		$sql="INSERT INTO lau ";
		$sql.="VALUES(?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$ten_lau);
		
		return $this->execute($parram);
	}
	
	public function Sua_lau($ma_lau,$ten_lau)
	{
		$sql="UPDATE lau SET ten_lau=? WHERE ma_lau=?";
		$this->setQuery($sql);
		$parram=array($ten_lau,$ma_lau);
		
		return $this->execute($parram);
	}
	
	public function Xoa_lau($ma_lau)
	{
		$sql="DELETE FROM lau WHERE ma_lau=?";
		$this->setQuery($sql);
		$parram=array($ma_lau);
		
		return $this->execute($parram);	
	}	
}
?>