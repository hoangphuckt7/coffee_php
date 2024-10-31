<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Username</label>
        <input class="text-input small-input" type="text" id="small-input" name="username" value="{$user_theo_id->username}"/>
        
      </p>
      <br />
      <p>
        <label>Password</label>
        <input class="text-input small-input" type="text" id="small-input" name="password" value="{$user_theo_id->password}"/>
        
      </p>
      <br />
      <p>
        <label>Họ tên</label>
        <input class="text-input small-input" type="text" id="small-input" name="fullname" value="{$user_theo_id->fullname}"/>
        
      </p>
      <br />
      <p>
        <label>Ngày sinh</label>
        <input class="text-input small-input" type="date" id="small-input" name="birthdate" value="{$user_theo_id->birthdate}"/>
        
      </p>
      <br />
      <p>
        <label>Giới tính</label>
        {if $user_theo_id->gender eq  1}
        <input type="radio" value="1" name="gender" checked/>Nam
        <input type="radio" value="0" name="gender" />Nữ
        {else}
        <input type="radio" value="1" name="gender" />Nam
        <input type="radio" value="0" name="gender" checked/>Nữ
        {/if}
      </p>
      <br />
      <p>
        <label>Địa chỉ</label>
        <input class="text-input small-input" type="text" id="small-input" name="address" value="{$user_theo_id->address}"/>
        
      </p>
      <br />
      <p>
        <label>Email</label>
        <input class="text-input small-input" type="text" id="small-input" name="email" value="{$user_theo_id->email}"/>
        
      </p>
      <br />
      <p>
        <label>Chứng minh nhân dân</label>
        <input class="text-input small-input" type="text" id="small-input" name="idcard" value="{$user_theo_id->idcard}"/>
        
      </p>
      <br />
      <p>
        <label>Số điện thoại</label>
        <input class="text-input small-input" type="text" id="small-input" name="phone_number"  value="{$user_theo_id->phone_number}"/>
        
      </p>
      <br />
      <p>
        <label>Cấp quyền</label>
        {if $user_theo_id->phan_quyen eq 0}
        <input type="radio" name="phan_quyen" value="0" checked/>Nhân viên
        <input type="radio" name="phan_quyen" value="1"/>Quản lý
        {else}
        <input type="radio" name="phan_quyen" value="0" />Nhân viên
        <input type="radio" name="phan_quyen" value="1" checked/>Quản lý
        {/if}
        
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
