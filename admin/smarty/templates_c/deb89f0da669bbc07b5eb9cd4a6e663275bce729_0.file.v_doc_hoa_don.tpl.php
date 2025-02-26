<?php
/* Smarty version 3.1.30, created on 2024-10-31 09:12:39
  from "C:\xampp\htdocs\appqlcoffee\admin\views\hoa_don\v_doc_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67233bf7d38915_52378026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb89f0da669bbc07b5eb9cd4a6e663275bce729' => 
    array (
      0 => 'C:\\xampp\\htdocs\\appqlcoffee\\admin\\views\\hoa_don\\v_doc_hoa_don.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67233bf7d38915_52378026 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>Ngày</th>
        <th>Thuộc bàn</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
        <th>Chi tiết</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        	<div class="pagination">
           		<?php echo $_smarty_tpl->tpl_vars['phan_trang']->value;?>

           	</div>
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_hoa_don']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->ngay;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_ban;?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['ds']->value->tong_tien);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['ds']->value->trang_thai == 0) {?>
        <td><b style="color:#F00">Chưa thanh toán</b></td>
        <?php } else { ?>
        <td><b style="color:#0C3">Đã thanh toán</b></td>
        <?php }?>
        <td><a style="color:#03F" href="xem_ct_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_hoa_don;?>
">Chi tiết</a></td>
        <td><!-- Icons --> 
          <a href="javascript:Xoa_hoa_don(<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_hoa_don;?>
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
