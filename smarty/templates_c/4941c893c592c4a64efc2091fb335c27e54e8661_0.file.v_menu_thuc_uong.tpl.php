<?php
/* Smarty version 3.1.30, created on 2024-04-17 11:02:32
  from "A:\xampp\htdocs\appqlcoffee\views\v_menu_thuc_uong.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661f9028236c17_28917004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4941c893c592c4a64efc2091fb335c27e54e8661' => 
    array (
      0 => 'A:\\xampp\\htdocs\\appqlcoffee\\views\\v_menu_thuc_uong.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661f9028236c17_28917004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content">
  <div class="left">
  <div id="hien_thi_san_pham_theo_loai_san_pham">
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_san_pham_theo_ma_loai']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      	
       <div class="khung">
      	
        <a href="javascript:XL_san_pham(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
,<?php echo $_smarty_tpl->tpl_vars['ma_ban']->value;?>
)">
          <div class="imgage"> 
          	<img src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt=""> 
          </div>
          <span><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</span>
 		</a>
       </div>
        
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    
   </div>
  <div class="right">
  	<form action="XL_luu.php" method="post" id="form_submit">
    <div class="right-top" >
   
      <div class="title_hang" style="border-top:none">
        <h4><?php if ($_smarty_tpl->tpl_vars['ma_ban']->value > 0) {?>
        		<?php echo $_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value->ten_ban;?>

                <input type="hidden" name="ma_ban" value="<?php echo $_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value->ma_ban;?>
" />
            <?php } else { ?>
            	<?php if ($_smarty_tpl->tpl_vars['ma_hoa_don']->value != -1) {?>
                	<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_ban;?>

                <?php } else { ?>
            		<?php echo $_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value;?>

                <?php }?>
        	<?php }?>
        </h4>
      </div>
      <!--Khi ở phần hóa đơn click xem hóa đơn-->
      <?php if ($_smarty_tpl->tpl_vars['ma_hoa_don']->value != -1) {?>
        <table width="100%" border="0" style="text-align:center">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_chi_tiet_hoa_don_theo_ma_hoa_don']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
                <tr class="hang" idx="<?php echo $_smarty_tpl->tpl_vars['ct']->value->ma_san_pham;?>
">
                    <div style="display:none" class="div_ma_sp">|<?php echo $_smarty_tpl->tpl_vars['ct']->value->ma_san_pham;?>
|</div>
                    <td class="ten_sp" ><?php echo $_smarty_tpl->tpl_vars['ct']->value->ten_san_pham;?>
</td>
                    <td class="so_luong" >
                    <input type="number" width="10px" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->so_luong;?>
" min=1 max=100 name="db_so_luong[]">
                    <input type="hidden" name="db_ma_san_pham[]" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->ma_san_pham;?>
" />
                    <input type="hidden" name="db_ten_san_pham[]"  value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->ten_san_pham;?>
"/>
                    <input type="hidden" name="db_don_gia[]" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value->don_gia;?>
" />
                    </td>
                    <td class="dauX" >X</td>
                    <td class="don_gia_san_pham"><?php echo number_format($_smarty_tpl->tpl_vars['ct']->value->don_gia);?>
</td>
                    <td class="dau_remove" ><span class="hang-noi-dung-remove"><i class="fa fa-times-circle"></i></span></td>
 				</tr>          
                            
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        </div>
        <div class="right-middle">
          <label class="container-css">Mang về
          	<?php if ($_smarty_tpl->tpl_vars['hoa_don']->value->mang_ve != '') {?>
            	<input type="checkbox" name="chk_mang_ve" value="Mang về" checked="checked">
            <?php } else { ?>
            	<input type="checkbox" name="chk_mang_ve" value="Mang về">
            <?php }?>
            <span class="checkmark"></span> </label>
        </div>
        <div class="right-bottom">
          <div class="tong">
            <div class="tien">
              <h3>Tổng</h3>
              <span><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_tien);?>
 đ</span> </div>
            <div class="clear"></div>
          </div>
          <div class="luu_va_thanhtoan">
            <ul>
              <li> <a href="#">Lưu</a> </li>
              <div class="clear"></div>
            </ul>
          </div>
        </div>
        </form> 
      <!--  // Khi ở phần hóa đơn click xem hóa đơn-->
      <?php } else { ?>
      
      			<table id="hien_thi_tung_san_pham" width="100%" border="0" style="text-align:center">
      <!--<div id="hien_thi_tung_san_pham"></div>-->
		</table>
    </div>
    <div class="right-middle">
      <label class="container-css">Mang về
        <input type="checkbox" name="chk_mang_ve" value="Mang về">
        <span class="checkmark"></span> </label>
    </div>
    <div class="right-bottom">
      <div class="tong">
        
        <div class="clear"></div>
      </div>
      <div class="luu_va_thanhtoan">
        <ul>
          <li> <a href="javascript:document.getElementById('form_submit').submit()">Lưu</a> </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
    </form>
      
      <?php }?>
      
  </div>
  <div class="clear"></div>
</div>

</div>
<?php }
}
