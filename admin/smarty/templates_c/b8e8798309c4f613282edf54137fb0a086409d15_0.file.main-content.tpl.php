<?php
/* Smarty version 3.1.30, created on 2024-04-17 10:58:38
  from "A:\xampp\htdocs\appqlcoffee\admin\smarty\templates\main-content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661f8f3eee1807_15503717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8e8798309c4f613282edf54137fb0a086409d15' => 
    array (
      0 => 'A:\\xampp\\htdocs\\appqlcoffee\\admin\\smarty\\templates\\main-content.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661f8f3eee1807_15503717 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main-content"> <!-- Main Content Section with everything -->
			
			
			<!-- Page Head -->
			<h2>Xin chào,<?php echo $_SESSION['fullname'];?>
</h2>
			<p id="page-intro">Quản trị viên</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				 <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
                    	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                    <?php }?>     
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
           
			<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<!-- End #footer -->
			
		</div><?php }
}
