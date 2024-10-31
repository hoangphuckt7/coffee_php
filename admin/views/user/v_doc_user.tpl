<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Username</th>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Quyền</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        
          
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    {foreach from=$ds_user item=ds}
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td>{$ds->username}</td>
        <td>{$ds->fullname}</td>
        <td>{$ds->phone_number}</td>
        {if $ds->phan_quyen eq 0}
        <td>Nhân Viên</td>
        {else}
        <td>Quản Lý</td>
        {/if}
        <td><!-- Icons --> 
          <a href="sua_user.php?id={$ds->id}" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_user({$ds->id})" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
