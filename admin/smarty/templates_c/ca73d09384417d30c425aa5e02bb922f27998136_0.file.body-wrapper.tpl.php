<?php
/* Smarty version 3.1.30, created on 2024-04-17 10:58:38
  from "A:\xampp\htdocs\appqlcoffee\admin\smarty\templates\body-wrapper.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661f8f3ee02505_09884975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca73d09384417d30c425aa5e02bb922f27998136' => 
    array (
      0 => 'A:\\xampp\\htdocs\\appqlcoffee\\admin\\smarty\\templates\\body-wrapper.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
    'file:main-content.tpl' => 1,
  ),
),false)) {
function content_661f8f3ee02505_09884975 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <!-- End #sidebar -->
		
		<?php $_smarty_tpl->_subTemplateRender("file:main-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <!-- End #main-content -->
	</div>
</body>
</html>
<?php }
}
