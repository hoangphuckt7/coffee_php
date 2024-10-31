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
                            {if isset($smarty.session.err)}
                            <div>{$smarty.session.err}</div>
                            {/if}
						</div>
				</form>
<!--/socialicons-->
			</div>
	
<!--copyright-->
<!--/section-->
		</div>
</section>
</body>
</html>