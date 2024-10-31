<?php
/* Smarty version 3.1.30, created on 2024-04-17 12:14:14
  from "A:\xampp\htdocs\appqlcoffee\admin\views\san_pham\v_them_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661fa0f6b7cca1_06778022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac884d993e6a857409c897c6c74973be16b10e2' => 
    array (
      0 => 'A:\\xampp\\htdocs\\appqlcoffee\\admin\\views\\san_pham\\v_them_san_pham.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661fa0f6b7cca1_06778022 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input class="text-input small-input" type="text" id="small-input" name="ten_san_pham" />
        
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
        	<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</option>
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
        <input class="text-input small-input" type="text" id="small-input" name="don_gia" />
        
      </p>
      <br />
      <p>
        <label>Hình</label>
        <input type="file" name="hinh" />
        
      </p>
      
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_san_pham"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
