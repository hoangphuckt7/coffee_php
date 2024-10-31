<?php
/* Smarty version 3.1.30, created on 2018-05-02 17:42:22
  from "D:\wamp64\www\app_ca_phe_2\admin\smarty\templates\sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae9f87ea95474_27240885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bddccb920edffda71dc079db26273602fb9dd1f' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\smarty\\templates\\sidebar.tpl',
      1 => 1525237778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9f87ea95474_27240885 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="sidebar">
<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			<h1>PHẦN MỀM QUẢN LÝ QUÁN CÀ PHÊ</h1>
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Chào, <a href="#"><?php echo $_SESSION['fullname'];?>
</a> | <a href="../dang_xuat.php" title="Sign Out">Đăng Xuất</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li> 
					<a href="#" class="nav-top-item "> <!-- Add the class "current" to current menu item -->
					Tài khoản
					</a>
					<ul>
                    	<li><a href="xem_ds_tai_khoan.php">Xem danh sách tài khoản</a></li>
						<li><a href="them_tai_khoan.php">Thêm tài khoản</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Loại sản phẩm
					</a>
					<ul>
                    	<li><a href="xem_ds_loai_san_pham.php">Xem danh sách loại sản phẩm</a></li>
						<li><a href="them_loai_san_pham.php">Thêm loại sản phẩm</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Sản phẩm
					</a>
					<ul>
						<li><a href="xem_ds_san_pham.php">Xem danh sách sản phẩm</a></li>
						<li><a href="them_san_pham.php">Thêm sản phẩm</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Hóa đơn
					</a>
					<ul>
						<li><a href="xem_ds_hoa_don.php">Xem danh sách hóa đơn</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Chỗ ngồi
					</a>
					<ul>
						<li><a href="xem_ds_lau.php">Xem danh sách lầu</a></li>
						<li><a href="them_lau.php">Thêm lầu</a></li>
						<li><a href="xem_ds_ban.php">Xem danh sách bàn</a></li>
						<li><a href="them_ban.php">Thêm bàn</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div><?php }
}
