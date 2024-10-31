<?php
/* Smarty version 3.1.30, created on 2024-10-31 09:17:25
  from "C:\xampp\htdocs\appqlcoffee\smarty\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67233d152911a3_92086833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd02b0bc0262b8614a827087b17e337e304ad30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\appqlcoffee\\smarty\\templates\\nav.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67233d152911a3_92086833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--START NAV -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">...</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="staff.php">HÓA ĐƠN</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_loai_san_pham']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
                <?php if ((!isset($_smarty_tpl->tpl_vars['ma_ban']->value))) {?>
                <li><a href="javascript:XL_loai_san_pham(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
,0)"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</a></li>
                <?php } else { ?>
                <li><a href="javascript:XL_loai_san_pham(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
,<?php echo $_smarty_tpl->tpl_vars['ma_ban']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</a></li>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
            	<li><h4><i class="fa fa-user-circle"></i>Chào,<?php echo $_SESSION['fullname'];?>
</h4></li>
                <li><a href="dang_xuat.php"><i class="fa fa-sign-out" style="color: white">Đăng Xuất</i></a></li>
            </ul>
        </div>
    </nav>
    <!--END NAV --><?php }
}
