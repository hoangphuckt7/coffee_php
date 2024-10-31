<?php
/* Smarty version 3.1.30, created on 2024-10-31 09:17:25
  from "C:\xampp\htdocs\appqlcoffee\views\v_hoa_don_va_ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67233d153e6a79_04473038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6cae0970a8f33c6321d7ee1f02295dadc4e60ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\appqlcoffee\\views\\v_hoa_don_va_ban.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67233d153e6a79_04473038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content">
        <!--START menu-trong -->
        <div class="container-fluid">
        	
            <div class="fix">
                    <ul class="nav navbar-nav fix">
                        <li><a href="staff.php?var_hoa_don=1">Hóa đơn</a></li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lau']->value, 'lau');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lau']->value) {
?>
                        <li><a href="staff.php?ma_lau=<?php echo $_smarty_tpl->tpl_vars['lau']->value->ma_lau;?>
"><?php echo $_smarty_tpl->tpl_vars['lau']->value->ten_lau;?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
            	</div>
            
        </div>
        <!--END menu-trong -->

        <div class="container-fluid">
        
        	<?php if ($_smarty_tpl->tpl_vars['var_hoa_don']->value == 1) {?>
            	<div class="wrapper-hoa_don">
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_hoa_don_chua_thanh_toan']->value, 'hoa_don_chua_thanh_toan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value) {
?>
                    <div class="hoadon">
                        <div class="tieu_de_hoa_don">
                            <span><?php echo $_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->ten_ban;?>
</span>
                        </div>
                        <div class="noidung_hoa_don">
                            <div class="dong">Ngày:<?php echo $_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->ngay;?>
</div>
                            <div class="dong">
                            	<?php if ($_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->mang_ve == '') {?>
                                	<span class="mang_ve"><b>Dùng tại quán</b></span>
                                <?php } else { ?>
                                	<span class="mang_ve"><b><?php echo $_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->mang_ve;?>
</b></span>
                                <?php }?>
                                
                                
                                <span class="gia"><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->tong_tien);?>
 đ</span>
                            </div>
                            <div class="dong">
                                <ul>
                                    <li class="hien_phan_thanh_toan"><a href="javascript:XL_hien_hoa_don(<?php echo $_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->ma_hoa_don;?>
)">Thanh Toán</a></li>
                                    <li><a href="menu.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don_chua_thanh_toan']->value->ma_hoa_don;?>
">Xem hóa đơn</a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</div>
            <?php } else { ?>
            	
                 <div class="cho_ngoi">
                <ul>
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_ban_theo_lau']->value, 'ban');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ban']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['ban']->value->trang_thai == 1) {?>
                    	<li><a class="tt<?php echo $_smarty_tpl->tpl_vars['ban']->value->trang_thai;?>
" href="javascript:alert('Bàn này đã có người!!')"><?php echo $_smarty_tpl->tpl_vars['ban']->value->ten_ban;?>
</a></li>
                    <?php } else { ?>
                    	<li><a href="menu.php?ma_ban=<?php echo $_smarty_tpl->tpl_vars['ban']->value->ma_ban;?>
"><?php echo $_smarty_tpl->tpl_vars['ban']->value->ten_ban;?>
</a></li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <div style="clear: both;"></div>;
                </ul>
                <div style="clear: both;"></div>
            </div>
                
            <?php }?>
            
           
        </div>
    </div>
<div class="thanh_toan_" >
<p id="close_thanh_toan"><i class="fa fa-times"></i></p>
<form action="XL_thanh_toan.php" method="post" id="form_thanh_toan">
<div id="hien_thi_phieu_in_va_thanh_toan">
    
</div>
</form>
</div>
<div class="xam"></div><?php }
}
