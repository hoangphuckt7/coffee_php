<?php
include_once("models/database.php");
class M_ban extends database
{
	public function Doc_ban()
	{
		$sql="SELECT * FROM ban";
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
	{	if($ma_ban>0)
		{
		$sql="SELECT * FROM ban WHERE ma_ban=?"	;
		$this->setQuery($sql);
		$parram=array($ma_ban);
		
		return $this->loadRow($parram);
		}
		else
			return "Vui lòng chọn bàn trước rồi hãy gọi món!";
	}
	
	//Thêm,xóa,sửa
	
	public function Sua_ban($ma_ban,$trang_thai)
	{
		$sql="UPDATE ban SET trang_thai=? ";
		$sql.="WHERE ma_ban=?";
		$this->setQuery($sql);
		$parram=array($trang_thai,$ma_ban);
		$this->execute($parram);	
	}	
}


//$m_ban=new M_ban();
//$arr=$m_ban->Doc_ban();
/*$m_ban=new M_ban();
$ma_lau=2;
$arr=$m_ban->Doc_ban_theo_ma_lau($ma_lau);
echo count($arr);*/
?>