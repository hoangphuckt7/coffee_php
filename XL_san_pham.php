<?php
include("models/m_san_pham.php");
$ma_san_pham=$_POST["ma_san_pham"];

$m_san_pham=new M_san_pham();
$san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);

//echo "<pre>";
//print_r($san_pham);
?>

<tr class="hang" idx="<?php echo $san_pham->ma_san_pham?>">
	<div style="display:none" class="div_ma_sp">|<?php echo $san_pham->ma_san_pham ?>|</div>
    <td class="ten_sp" ><?php echo $san_pham->ten_san_pham?></td>
    <td class="so_luong" >
    <input type="number" width="10px" value="1" min=1 max=100 name="db_so_luong[]">
    <input type="hidden" name="db_ma_san_pham[]" value="<?php echo $san_pham->ma_san_pham?>" />
    <input type="hidden" name="db_ten_san_pham[]"  value="<?php echo $san_pham->ten_san_pham?>"/>
    <input type="hidden" name="db_don_gia[]" value="<?php echo $san_pham->don_gia?>" />
    </td>
    <td class="dauX" >X</td>
    <td class="don_gia_san_pham"><?php echo number_format($san_pham->don_gia) ?></td>
    <td class="dau_remove" ><span class="hang-noi-dung-remove"><i class="fa fa-times-circle"></i></span></td>
 </tr>



