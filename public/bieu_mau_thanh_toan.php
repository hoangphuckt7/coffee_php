<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Biểu mẫu</title>
</head>

<body>
<table width="100%" border="1">
  <caption>
    Phiếu thanh toán
  </caption>
  <tr>
    <td>STT</td>
    <td>Tên món</td>
    <td>SL</td>
    <td>Đơn giá</td>
    <td>Thành tiền</td>
  </tr>
  <?php for($i=0;$i<8;$i++)
  {
  ?>
  <tr>
    <td><?php echo $i+1 ?></td>
    <td>Cà phê sữa</td>
    <td>1</td>
    <td>29000</td>
    <td>29000</td>
  </tr>
  <?php
  }
  ?>
</table>

</body>
</html>