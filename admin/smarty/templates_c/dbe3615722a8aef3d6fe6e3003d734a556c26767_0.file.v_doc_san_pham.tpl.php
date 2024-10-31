<?php
/* Smarty version 3.1.30, created on 2018-05-02 17:42:28
  from "D:\wamp64\www\app_ca_phe_2\admin\views\san_pham\v_doc_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9f88422d629_91578617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe3615722a8aef3d6fe6e3003d734a556c26767' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\san_pham\\v_doc_san_pham.tpl',
      1 => 1525187865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9f88422d629_91578617 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>Tên Sản Phẩm</th>
        <th>Thuộc loại</th>
        <th>Đơn giá</th>
        <th>Hình</th>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_san_pham']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_san_pham;?>
</td>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_loai_san_pham']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
        	<?php if ($_smarty_tpl->tpl_vars['loai']->value->ma_loai == $_smarty_tpl->tpl_vars['ds']->value->ma_loai) {?>
        	<td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</td>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->don_gia;?>
</td>
        <td><img src="../public/images/<?php echo $_smarty_tpl->tpl_vars['ds']->value->hinh;?>
" alt="anh"  width="120px" /></td>
        <td><!-- Icons --> 
          <a href="sua_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_san_pham;?>
" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_san_pham(<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_san_pham;?>
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
