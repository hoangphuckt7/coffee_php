<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên sản phẩm</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_san_pham" />
        
      </p>
      <br />
      <p>
        <label>Loại sản phẩm</label>
        <select name="ma_loai">
        {foreach from=$ds_loai_san_pham item=loai}
        	<option value="{$loai->ma_loai}">{$loai->ten_loai}</option>
        {/foreach}
        </select>
        
      </p>
      <br />
      <p>
        <label>Đơn giá</label>
        <input class="text-input small-input" type="text" id="small-input" name="don_gia" />
        
      </p>
      <br />
      <p>
        <label>Hình</label>
        <input type="file" name="hinh" />
        
      </p>
      
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_san_pham"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
