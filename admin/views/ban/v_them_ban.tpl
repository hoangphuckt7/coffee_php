<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên bàn</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_ban" />
        
      </p>
      <br />
      <p>
        <label>Thuộc lầu</label>
        <select name="ma_lau">
        {foreach from=$ds_lau item=lau}
        	<option value="{$lau->ma_lau}">{$lau->ten_lau}</option>
        {/foreach}
        </select>
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_ban"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
