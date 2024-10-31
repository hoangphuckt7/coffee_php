<div class="content-box-header">
  <h3>{$title_content} ({$hoa_don_theo_ma_hoa_don->ten_ban})</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        
          
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    {foreach from=$chi_tiet_hoa_don_theo_ma_hoa_don item=ct}
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td>{$ct->ten_san_pham}</td>
        <td>{$ct->so_luong}</td>
        <td>{$ct->don_gia|number_format}</td>
       <td>{($ct->don_gia * $ct->so_luong)|number_format}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
