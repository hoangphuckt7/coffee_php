<?php
/* Smarty version 3.1.30, created on 2018-05-02 17:42:39
  from "D:\wamp64\www\app_ca_phe_2\admin\views\ban\v_doc_ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9f88fde83a7_41121517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2535d95a7a440beedaa7b57dc3a2442c83ccb50' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\ban\\v_doc_ban.tpl',
      1 => 1525280358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9f88fde83a7_41121517 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>Tên Bàn</th>
        <th>Thuộc lầu</th>
        <th>Trạng thái</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        
          <div class="pagination">
           <?php echo $_smarty_tpl->tpl_vars['phan_trang']->value;?>

            </div>
          
          <!-- End .pagination -->
          
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_ban']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_ban;?>
</td>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lau']->value, 'lau');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lau']->value) {
?>
        	<?php if ($_smarty_tpl->tpl_vars['lau']->value->ma_lau == $_smarty_tpl->tpl_vars['ds']->value->ma_lau) {?>
        	<td><?php echo $_smarty_tpl->tpl_vars['lau']->value->ten_lau;?>
</td>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value->trang_thai;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 1) {?>
        <td style="color:#F00; font-weight:bold">Có người</td>
        <?php } else { ?>
        <td style="color:#0C0;">Trống</td>
        <?php }?>
        <td><!-- Icons --> 
          <a href="sua_ban.php?ma_ban=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_ban;?>
" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_ban(<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_ban;?>
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
