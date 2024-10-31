<?php
include_once("models/database.php");
class M_hoa_don extends database
{
	public function Doc_hoa_don()
	{
		$sql="SELECT * FROM hoa_don";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_hoa_don_theo_ma_ban($ma_ban)
	{
		$sql="SELECT * FROM hoa_don ";
		$sql.="WHERE ma_ban=?"	;
		$this->setQuery($sql);
		$parram=array($ma_ban);
		return $this->loadRow($parram);
	}
	
	public function Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don)
	{
		$sql="SELECT * FROM hoa_don ";
		$sql.="WHERE ma_hoa_don=?"	;
		$this->setQuery($sql);
		$parram=array($ma_hoa_don);
		return $this->loadRow($parram);
	}
	
	public function Doc_hoa_don_theo_trang_thai($trang_thai)
	{
		
		$sql="SELECT * FROM hoa_don ";
		$sql.="WHERE trang_thai=?"	;
		$this->setQuery($sql);
		$parram=array($trang_thai);
		
		if($trang_thai==0)//trang thai =0-->chua thanh toan load nhieu dong
		{
			return $this->loadAllRows($parram);
		}
		else//trang thai=1-->da thanh toan
			return $this->loadRow($parram);
	}
	
	
	
	public function Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don)
	{
		$sql="SELECT * FROM chi_tiet_hoa_don ";
		$sql.="WHERE ma_hoa_don=?";
		$this->setQuery($sql);
		$parram=array($ma_hoa_don);
		return $this->loadAllRows($parram);
	}
	
	
	//Thêm,Sửa,Xóa
	//`ma_hoa_don`, `ngay`, `ma_ban`,ten_ban, `trang_thai`, `tong_tien`,mang_ve
	public function Them_hoa_don($ngay,$ma_ban,$ten_ban,$trang_thai,$tong_tien,$mang_ve)
	{
		$sql="INSERT INTO hoa_don ";
		$sql.="VALUES(?,?,?,?,?,?,?) ";
		
		$this->setQuery($sql);
		$parram=array(NULL,$ngay,$ma_ban,$ten_ban,$trang_thai,$tong_tien,$mang_ve);
		$result=$this->execute($parram);
		if($result)
		{
			return $this->getLastId();	
		}
		else
			return false;
	}
	//`id`, `ma_hoa_don`, `ma_san_pham`,ten_san_pham, `so_luong`, `don_gia`
	public function Them_chi_tiet_hoa_don($ma_hoa_don,$ma_san_pham,$ten_san_pham,$so_luong,$don_gia)
	{
		$sql="INSERT INTO chi_tiet_hoa_don ";
		$sql.="VALUES(?,?,?,?,?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$ma_hoa_don,$ma_san_pham,$ten_san_pham,$so_luong,$don_gia);
		$this->execute($parram);
	}
	
	
	public function Sua_hoa_don($ma_hoa_don,$trang_thai)
	{
		$sql="UPDATE hoa_don SET trang_thai=? ";
		$sql.="WHERE ma_hoa_don=?";
		$this->setQuery($sql);
		$parram=array($trang_thai,$ma_hoa_don);
		$this->execute($parram);
	}
}
?>