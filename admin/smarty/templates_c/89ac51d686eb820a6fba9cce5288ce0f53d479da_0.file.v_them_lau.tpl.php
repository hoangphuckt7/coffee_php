<?php
/* Smarty version 3.1.30, created on 2024-04-17 11:11:44
  from "A:\xampp\htdocs\appqlcoffee\admin\views\lau\v_them_lau.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661f9250d7f6e6_27023249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ac51d686eb820a6fba9cce5288ce0f53d479da' => 
    array (
      0 => 'A:\\xampp\\htdocs\\appqlcoffee\\admin\\views\\lau\\v_them_lau.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661f9250d7f6e6_27023249 (Smarty_Internal_Template $_smarty_tpl) {
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
        <label>Tên lầu</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_lau" />
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_lau"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
