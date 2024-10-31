<?php
include_once("models/database.php");
class M_san_pham extends database
{
	public function Doc_san_pham()
	{
		$sql="SELECT * FROM san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_san_pham_theo_ma_loai($ma_loai)
	{
		$sql="SELECT * FROM san_pham WHERE ma_loai=?";
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		return $this->loadAllRows($parram);
	}
	
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql="SELECT * FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_san_pham);
		
		return $this->loadRow($parram);
	}	
}

/*$m_san_pham=new M_san_pham();
//$kq=$m_san_pham->Doc_san_pham();
$ma_loai=2;
$kq=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);
echo count($kq);*/
?>