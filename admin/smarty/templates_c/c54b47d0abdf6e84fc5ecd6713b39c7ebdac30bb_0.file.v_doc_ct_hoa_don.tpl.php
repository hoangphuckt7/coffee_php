<?php
/* Smarty version 3.1.30, created on 2018-05-02 17:42:32
  from "D:\wamp64\www\app_ca_phe_2\admin\views\hoa_don\v_doc_ct_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9f888295f32_14206124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54b47d0abdf6e84fc5ecd6713b39c7ebdac30bb' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\hoa_don\\v_doc_ct_hoa_don.tpl',
      1 => 1525277912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9f888295f32_14206124 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['hoa_don_theo_ma_hoa_don']->value->ten_ban;?>
)</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chi_tiet_hoa_don_theo_ma_hoa_don']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ct']->value->ten_san_pham;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ct']->value->so_luong;?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['ct']->value->don_gia);?>
</td>
       <td><?php echo number_format(($_smarty_tpl->tpl_vars['ct']->value->don_gia*$_smarty_tpl->tpl_vars['ct']->value->so_luong));?>
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
