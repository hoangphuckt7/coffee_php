<?php
//id, username, password, fullname, birthdate, gender, address, email, idcard, phone_number, phan_quyen
include_once("models/database.php");
class M_user extends database
{
	
	//Đọc
	public function Doc_user()
	{
		$sql="SELECT * FROM account";
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	public function Doc_user_voi_username_va_password($username,$password)
	{
		$sql="SELECT * FROM account ";
		$sql.="WHERE username=? AND password=?"	;
		$this->setQuery($sql);
		$parram=array($username,md5($password));
		
		return $this->loadRow($parram);
	}
	
	public function Doc_user_theo_id($id)
	{
		$sql="SELECT * FROM account ";
		$sql.="WHERE id=?";
		$this->setQuery($sql);
		$parram=array($id);
		
		return $this->loadRow($parram);
	}
	
	
	
	//Thêm,sửa,xóa
	
	public function Them_user($username, $password, $fullname, $birthdate, $gender, $address, $email, $idcard, $phone_number, $phan_quyen)
	{
		$sql="INSERT INTO account ";
		$sql.="VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$username, md5($password), $fullname, $birthdate, $gender, $address, $email, $idcard, $phone_number, $phan_quyen);
		 return $this->execute($parram);
	}
	
	
	
	public function Sua_user($id,$username, $password, $fullname, $birthdate, $gender, $address, $email, $idcard, $phone_number, $phan_quyen)
	{
		$sql="UPDATE account SET username=?,password=?,fullname=?,birthdate=?,gender=?,address=?,email=?,idcard=?,phone_number=?,phan_quyen=? WHERE id=?";
		$this->setQuery($sql);
		$parram=array($username,$password, $fullname, $birthdate, $gender, $address, $email, $idcard, $phone_number, $phan_quyen,$id);
		
		return $this->execute($parram);
	}
	
	
	public function Xoa_user($id)
	{
		$sql="DELETE FROM account ";
		$sql.="WHERE id=?";
		$this->setQuery($sql);
		$parram=array($id);
		return $this->execute($parram);	
	}
}
?>