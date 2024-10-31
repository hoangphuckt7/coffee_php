<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên Loại</th>
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
    {foreach from=$ds_loai_san_pham item=ds}
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td>{$ds->ten_loai}</td>
        <td><!-- Icons --> 
          <a href="sua_loai_san_pham.php?ma_loai={$ds->ma_loai}" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_loai_san_pham({$ds->ma_loai})" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
