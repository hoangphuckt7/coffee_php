<?php
/* Smarty version 3.1.30, created on 2018-05-02 17:42:50
  from "D:\wamp64\www\app_ca_phe_2\admin\views\san_pham\v_sua_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9f89ad06c18_80778456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f29f7593d53c9d38800ae133dc4bacb93405858a' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\san_pham\\v_sua_san_pham.tpl',
      1 => 1525193818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9f89ad06c18_80778456 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên sản phẩm</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_san_pham"  value="<?php echo $_smarty_tpl->tpl_vars['san_pham_theo_ma_san_pham']->value->ten_san_pham;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Loại sản phẩm</label>
        <select name="ma_loai">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_loai_san_pham']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
        	<?php if ($_smarty_tpl->tpl_vars['san_pham_theo_ma_san_pham']->value->ma_loai == $_smarty_tpl->tpl_vars['loai']->value->ma_loai) {?>
            	<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</option>
            <?php } else { ?>
        		<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
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
        <label>Đơn giá</label>
        <input class="text-input small-input" type="text" id="small-input" name="don_gia" value="<?php echo $_smarty_tpl->tpl_vars['san_pham_theo_ma_san_pham']->value->don_gia;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Hình</label>
        <img src="../public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham_theo_ma_san_pham']->value->hinh;?>
" alt="anh" width="120px"/>
        <br />
        <input type="file" name="hinh" />
        
      </p>
      
      <br />
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btn_sua_san_pham"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
