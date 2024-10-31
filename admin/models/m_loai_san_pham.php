<?php
include_once("models/database.php");
class M_loai_san_pham extends database
{
	//`ma_loai`, `ten_loai`
	public function Doc_loai_san_pham()
	{
		$sql="SELECT * FROM loai_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_loai_san_pham_theo_ma_loai($ma_loai)
	{
		$sql="SELECT * FROM loai_san_pham WHERE ma_loai=?"	;
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		return $this->loadRow($parram);
	}
	
	public function Them_loai_san_pham($ten_loai)
	{
		$sql="INSERT INTO loai_san_pham ";
		$sql.="VALUES(?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$ten_loai);
		
		return $this->execute($parram);
	}
	
	public function Sua_loai_san_pham($ma_loai,$ten_loai)
	{
		$sql="UPDATE loai_san_pham SET ten_loai=? WHERE ma_loai=?";
		$this->setQuery($sql);
		$parram=array($ten_loai,$ma_loai);
		
		return $this->execute($parram);
	}
	
	public function Xoa_loai_san_pham($ma_loai)
	{
		$sql="DELETE FROM loai_san_pham WHERE ma_loai=?";
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		return $this->execute($parram);	
	}
}
?>