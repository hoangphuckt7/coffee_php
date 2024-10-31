<div class="content-box-header">
  <h3>{$title_content}</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên loại</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_loai"  value="{$san_pham_theo_ma_loai->ten_loai}"/>
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Cập nhật" name="btn_cap_nhat"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
