<?php
/* Smarty version 3.1.30, created on 2024-10-31 09:11:24
  from "C:\xampp\htdocs\appqlcoffee\admin\smarty\templates\section_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67233bace4cc09_46389595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb870e28972655da0c362af66db7af6879606243' => 
    array (
      0 => 'C:\\xampp\\htdocs\\appqlcoffee\\admin\\smarty\\templates\\section_login.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67233bace4cc09_46389595 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="agile-w3ls">
	<div class="header-w3ls">
		<h1>Phần Mềm Quản Lý Quán Cà Phê Vừa và Nhỏ</h1>
	</div>
		<div class="headermain-w3ls">
			<div class="header-form">
				<form action="dieu_huong.php" method="post">
				<h2>ĐĂNG NHẬP</h2>
						<div class="username">
							<p>Tài khoản</p>
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="username" placeholder="username" required>
                            <div class="clear"></div>
						</div>
						<div class="password">
							<p>Mật khẩu</p>
							<span><i class="fa fa-key" aria-hidden="true"></i></span>
							<input type="password" name="password" placeholder="password" required>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						<div class="signin-w3ls">
							<input type="submit" value="đăng nhập" name="login" >
                            </br>
                            <?php if (isset($_SESSION['err'])) {?>
                            <div><?php echo $_SESSION['err'];?>
</div>
                            <?php }?>
						</div>
				</form>
<!--/socialicons-->
			</div>
	
<!--copyright-->
<!--/section-->
		</div>
</section>
</body>
</html><?php }
}
