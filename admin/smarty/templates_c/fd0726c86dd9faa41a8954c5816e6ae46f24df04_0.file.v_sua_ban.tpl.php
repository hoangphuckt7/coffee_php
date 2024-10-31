<?php
/* Smarty version 3.1.30, created on 2018-05-02 17:42:45
  from "D:\wamp64\www\app_ca_phe_2\admin\views\ban\v_sua_ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9f895c30c29_71148408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd0726c86dd9faa41a8954c5816e6ae46f24df04' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\ban\\v_sua_ban.tpl',
      1 => 1525162710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9f895c30c29_71148408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên bàn</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_ban"  value="<?php echo $_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value->ten_ban;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Thuộc lầu</label>
        <select name="ma_lau">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lau']->value, 'lau');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lau']->value) {
?>
        	<?php if ($_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value->ma_lau == $_smarty_tpl->tpl_vars['lau']->value->ma_lau) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['lau']->value->ma_lau;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lau']->value->ten_lau;?>
</option>
            <?php } else { ?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['lau']->value->ma_lau;?>
"><?php echo $_smarty_tpl->tpl_vars['lau']->value->ten_lau;?>
</option>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        
      </p>
      <br />
       <p>
        <label>Trạng thái</label>
        <?php if ($_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value->trang_thai == 0) {?>
        <input type="radio" id="small-input" name="trang_thai"  value="0" checked="checked"/>Trống
        <input type="radio" id="small-input" name="trang_thai"  value="1"/>Có người
        <?php } else { ?>
        <input type="radio" id="small-input" name="trang_thai"  value="0"/>Trống
        <input type="radio" id="small-input" name="trang_thai"  value="1" checked="checked"/>Có người
        <?php }?>
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btn_sua_ban"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
