<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên bàn</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_ban"  value="{$ban_theo_ma_ban->ten_ban}"/>
        
      </p>
      <br />
      <p>
        <label>Thuộc lầu</label>
        <select name="ma_lau">
        {foreach from=$ds_lau item=lau}
        	{if $ban_theo_ma_ban->ma_lau eq $lau->ma_lau}
            <option value="{$lau->ma_lau}" selected="selected">{$lau->ten_lau}</option>
            {else}
        	<option value="{$lau->ma_lau}">{$lau->ten_lau}</option>
            {/if}
        {/foreach}
        </select>
        
      </p>
      <br />
       <p>
        <label>Trạng thái</label>
        {if $ban_theo_ma_ban->trang_thai eq 0}
        <input type="radio" id="small-input" name="trang_thai"  value="0" checked="checked"/>Trống
        <input type="radio" id="small-input" name="trang_thai"  value="1"/>Có người
        {else}
        <input type="radio" id="small-input" name="trang_thai"  value="0"/>Trống
        <input type="radio" id="small-input" name="trang_thai"  value="1" checked="checked"/>Có người
        {/if}
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btn_sua_ban"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
