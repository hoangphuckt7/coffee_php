<?php

//`ma_san_pham`, `ten_san_pham`, `ma_loai`, `don_gia`, `hinh`
include_once("models/database.php");
class M_san_pham extends database
{
	public function Doc_san_pham($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM san_pham ";
		if($vt>=0 && $limit>0)
		{
			$sql.="limit $vt,$limit";
		}
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql="SELECT * FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_san_pham);
		
		return $this->loadRow($parram);
	}
	
	
	//Them,Sua,Xoa
	public function Them_san_pham($ten_san_pham, $ma_loai, $don_gia, $hinh)
	{
		$sql="INSERT INTO san_pham ";
		$sql.="VALUES(?,?,?,?,?)";
		$this->setQuery($sql);
		
		$parram=array(NULL,$ten_san_pham, $ma_loai, $don_gia, $hinh);
		
		return $this->execute($parram);
	}
	
	public function Sua_san_pham($ma_san_pham,$ten_san_pham, $ma_loai, $don_gia, $hinh)
	{
		$sql="UPDATE san_pham SET ten_san_pham=?, ma_loai=?, don_gia=?, hinh=? ";
		$sql.="WHERE ma_san_pham=?"	;
		$this->setQuery($sql);
		
		$parram=array($ten_san_pham, $ma_loai, $don_gia, $hinh,$ma_san_pham);
		return $this->execute($parram);
	}
	
	public function Xoa_san_pham($ma_san_pham)
	{
		$sql="DELETE FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_san_pham);
		return $this->execute($parram);
	}
}
?>