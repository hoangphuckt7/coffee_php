<?php
/* Smarty version 3.1.30, created on 2024-10-31 09:12:15
  from "C:\xampp\htdocs\appqlcoffee\admin\views\user\v_sua_tai_khoan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67233bdf567351_66436015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a48f98d33c7e463de5d333a51e48e26fea42bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\appqlcoffee\\admin\\views\\user\\v_sua_tai_khoan.tpl',
      1 => 1525283194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67233bdf567351_66436015 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Username</label>
        <input class="text-input small-input" type="text" id="small-input" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->username;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Password</label>
        <input class="text-input small-input" type="text" id="small-input" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->password;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Họ tên</label>
        <input class="text-input small-input" type="text" id="small-input" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->fullname;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Ngày sinh</label>
        <input class="text-input small-input" type="date" id="small-input" name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->birthdate;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Giới tính</label>
        <?php if ($_smarty_tpl->tpl_vars['user_theo_id']->value->gender == 1) {?>
        <input type="radio" value="1" name="gender" checked/>Nam
        <input type="radio" value="0" name="gender" />Nữ
        <?php } else { ?>
        <input type="radio" value="1" name="gender" />Nam
        <input type="radio" value="0" name="gender" checked/>Nữ
        <?php }?>
      </p>
      <br />
      <p>
        <label>Địa chỉ</label>
        <input class="text-input small-input" type="text" id="small-input" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->address;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Email</label>
        <input class="text-input small-input" type="text" id="small-input" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->email;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Chứng minh nhân dân</label>
        <input class="text-input small-input" type="text" id="small-input" name="idcard" value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->idcard;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Số điện thoại</label>
        <input class="text-input small-input" type="text" id="small-input" name="phone_number"  value="<?php echo $_smarty_tpl->tpl_vars['user_theo_id']->value->phone_number;?>
"/>
        
      </p>
      <br />
      <p>
        <label>Cấp quyền</label>
        <?php if ($_smarty_tpl->tpl_vars['user_theo_id']->value->phan_quyen == 0) {?>
        <input type="radio" name="phan_quyen" value="0" checked/>Nhân viên
        <input type="radio" name="phan_quyen" value="1"/>Quản lý
        <?php } else { ?>
        <input type="radio" name="phan_quyen" value="0" />Nhân viên
        <input type="radio" name="phan_quyen" value="1" checked/>Quản lý
        <?php }?>
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btn_sua_tai_khoan"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
