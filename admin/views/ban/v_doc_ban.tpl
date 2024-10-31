<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên Bàn</th>
        <th>Thuộc lầu</th>
        <th>Trạng thái</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        
          <div class="pagination">
           {$phan_trang}
            </div>
          
          <!-- End .pagination -->
          
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    {foreach from=$danh_sach_ban item=ds}
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td>{$ds->ten_ban}</td>
        {foreach from=$ds_lau item=lau}
        	{if $lau->ma_lau eq $ds->ma_lau}
        	<td>{$lau->ten_lau}</td>
            {/if}
        {/foreach}
        {if {$ds->trang_thai} eq 1}
        <td style="color:#F00; font-weight:bold">Có người</td>
        {else}
        <td style="color:#0C0;">Trống</td>
        {/if}
        <td><!-- Icons --> 
          <a href="sua_ban.php?ma_ban={$ds->ma_ban}" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_ban({$ds->ma_ban})" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
