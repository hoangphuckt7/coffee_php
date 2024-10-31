<?php
/* Smarty version 3.1.30, created on 2024-10-31 09:12:55
  from "C:\xampp\htdocs\appqlcoffee\admin\views\loai_san_pham\v_doc_loai_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67233c0782bf28_85429629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b5b2b3d8bd7c82b020f38ac50ee70a189bc8bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\appqlcoffee\\admin\\views\\loai_san_pham\\v_doc_loai_san_pham.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67233c0782bf28_85429629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên Loại</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
          
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_loai_san_pham']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_loai;?>
</td>
        <td><!-- Icons --> 
          <a href="sua_loai_san_pham.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_loai;?>
" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_loai_san_pham(<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_loai;?>
)" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
  </table>
</div>
<?php }
}
