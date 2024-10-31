<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên Sản Phẩm</th>
        <th>Thuộc loại</th>
        <th>Đơn giá</th>
        <th>Hình</th>
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
    {foreach from=$ds_san_pham item=ds}
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td>{$ds->ten_san_pham}</td>
        {foreach from=$ds_loai_san_pham item=loai}
        	{if $loai->ma_loai eq $ds->ma_loai}
        	<td>{$loai->ten_loai}</td>
            {/if}
        {/foreach}
        <td>{$ds->don_gia}</td>
        <td><img src="../public/images/{$ds->hinh}" alt="anh"  width="120px" /></td>
        <td><!-- Icons --> 
          <a href="sua_san_pham.php?ma_san_pham={$ds->ma_san_pham}" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_san_pham({$ds->ma_san_pham})" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
