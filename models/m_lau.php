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
}

/*$m_lau=new M_lau();
$arr=$m_lau->Doc_lau();*/
/*$m_lau=new M_lau();
$ma_lau=2;
$arr=$m_lau->Doc_lau_theo_ma_lau($ma_lau);
echo count($arr);*/
?>