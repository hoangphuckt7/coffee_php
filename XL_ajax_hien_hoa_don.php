<?php
session_start();
include("models/m_hoa_don.php");
$ma_hoa_don=$_POST["ma_hoa_don"];
//echo $ma_hoa_don;
$m_hoa_don=new M_hoa_don();
$ds_chi_tiet_hoa_don=$m_hoa_don->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);
$hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
?>

<div id="phieu_thanh_toan">
	<div id="in">
<input type="hidden" name="db_thanh_toan" value="<?php echo $ma_hoa_don?>" />
    <h2 style="text-align:center">Phiếu Thanh Toán</h2>
    <p style="text-align:center">Số:<?php echo $ma_hoa_don?></p>
    <table width="78%" border="1" align="center">
      <tr>
        <td><h4><?php echo $hoa_don->ten_ban ?></h4></td>
        <td>Thu ngân:<?php echo $_SESSION["fullname"]?></td>
      </tr>
      <tr>
        <td>Ngày:<?php echo $hoa_don->ngay ?></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <br />
    <table width="80%" border="0" align="center">
      
      <tr class="cham_cham">
        <th>STT</th>
        <th>Tên món</th>
        <th>SL</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
      <?php
	  $i=1;
      foreach($ds_chi_tiet_hoa_don as $ct)
	  {
		  $thanh_tien=($ct->so_luong *$ct->don_gia);
	  ?>
      <tr class="cham_cham">
        <td><?php echo $i++ ?></td>
        <td><?php echo $ct->ten_san_pham ?></td>
        <td><?php echo $ct->so_luong ?></td>
        <td><?php echo $ct->don_gia ?></td>
        <td><?php echo $thanh_tien ?></td>
      </tr>
     <?php
     }
	 ?>
    
     
        
     
      
      
      <tr style="border-top:solid 2px black;">
        <td colspan="3" style="text-align:left; font-weight:bold" >Tổng:</td>
        <td colspan="2" style="text-align:center; font-size:x-large"><?php echo $hoa_don->tong_tien ?></td>
      </tr>
      </table>
    </div> 
    <div style="text-align:right"> <a href="javascript:In()" > <i class="fa fa-print" style="font-size: 64px"></i> </a> </div>
</div>
<div id="thoi_tien">
    <h2 style="text-align:center">Thanh Toán</h2>
    <div class="div_thanh_toan">
    <table width="90%" border="1" align="center">
      <tr>
        <td>Tiền khách đưa:</td>
        <td><input type="number" onkeyup="XL_tien_thua(this.value,<?php echo $ma_hoa_don?>)"/> đ</td>
      </tr>
      <tr>
        <td style="text-align:right">-</td>
        <td><?php echo number_format($hoa_don->tong_tien) ?> đ</td>
      </tr>
      <tr>
        <td>Tiền thừa của khách:</td>
        <td id="tien_thua">0 đ</td>
      </tr>
    </table>
    <div class="luu_va_thanhtoan thanh_toan">
            <ul>
              <li> <a href="javascript:document.getElementById('form_thanh_toan').submit()">Thanh Toán</a> </li>
              <div class="clear"></div>
            </ul>
          </div>
    
    </div>
    </div>
<div class="clear"></div>