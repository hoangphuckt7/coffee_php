<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên sản phẩm</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_san_pham"  value="{$san_pham_theo_ma_san_pham->ten_san_pham}"/>
        
      </p>
      <br />
      <p>
        <label>Loại sản phẩm</label>
        <select name="ma_loai">
        {foreach from=$ds_loai_san_pham item=loai}
        	{if $san_pham_theo_ma_san_pham->ma_loai eq $loai->ma_loai}
            	<option value="{$loai->ma_loai}" selected="selected">{$loai->ten_loai}</option>
            {else}
        		<option value="{$loai->ma_loai}">{$loai->ten_loai}</option>
            {/if}
        {/foreach}
        </select>
        
      </p>
      <br />
      <p>
        <label>Đơn giá</label>
        <input class="text-input small-input" type="text" id="small-input" name="don_gia" value="{$san_pham_theo_ma_san_pham->don_gia}"/>
        
      </p>
      <br />
      <p>
        <label>Hình</label>
        <img src="../public/images/{$san_pham_theo_ma_san_pham->hinh}" alt="anh" width="120px"/>
        <br />
        <input type="file" name="hinh" />
        
      </p>
      
      <br />
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btn_sua_san_pham"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
