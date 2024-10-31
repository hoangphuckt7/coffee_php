<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Ngày</th>
        <th>Thuộc bàn</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
        <th>Chi tiết</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        	<div class="pagination">
           		{$phan_trang}
           	</div>
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    {foreach from=$ds_hoa_don item=ds}
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td>{$ds->ngay}</td>
        <td>{$ds->ten_ban}</td>
        <td>{$ds->tong_tien|number_format}</td>
        {if $ds->trang_thai eq 0}
        <td><b style="color:#F00">Chưa thanh toán</b></td>
        {else}
        <td><b style="color:#0C3">Đã thanh toán</b></td>
        {/if}
        <td><a style="color:#03F" href="xem_ct_hoa_don.php?ma_hoa_don={$ds->ma_hoa_don}">Chi tiết</a></td>
        <td><!-- Icons --> 
          <a href="javascript:Xoa_hoa_don({$ds->ma_hoa_don})" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
