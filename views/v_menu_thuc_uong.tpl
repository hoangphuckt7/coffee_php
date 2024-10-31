<div class="content">
  <div class="left">
  <div id="hien_thi_san_pham_theo_loai_san_pham">
  	{foreach from=$ds_san_pham_theo_ma_loai item=san_pham}
      	
       <div class="khung">
      	
        <a href="javascript:XL_san_pham({$san_pham->ma_san_pham},{$ma_ban})">
          <div class="imgage"> 
          	<img src="public/images/{$san_pham->hinh}" alt=""> 
          </div>
          <span>{$san_pham->ten_san_pham}</span>
 		</a>
       </div>
        
     {/foreach}
    </div>
    
   </div>
  <div class="right">
  	<form action="XL_luu.php" method="post" id="form_submit">
    <div class="right-top" >
   
      <div class="title_hang" style="border-top:none">
        <h4>{if $ma_ban>0}
        		{$ban_theo_ma_ban->ten_ban}
                <input type="hidden" name="ma_ban" value="{$ban_theo_ma_ban->ma_ban}" />
            {else}
            	{if $ma_hoa_don neq -1}
                	{$hoa_don->ten_ban}
                {else}
            		{$ban_theo_ma_ban}
                {/if}
        	{/if}
        </h4>
      </div>
      <!--Khi ở phần hóa đơn click xem hóa đơn-->
      {if $ma_hoa_don neq -1}
        <table width="100%" border="0" style="text-align:center">
             {foreach from=$ds_chi_tiet_hoa_don_theo_ma_hoa_don item=ct}
                <tr class="hang" idx="{$ct->ma_san_pham}">
                    <div style="display:none" class="div_ma_sp">|{$ct->ma_san_pham}|</div>
                    <td class="ten_sp" >{$ct->ten_san_pham}</td>
                    <td class="so_luong" >
                    <input type="number" width="10px" value="{$ct->so_luong}" min=1 max=100 name="db_so_luong[]">
                    <input type="hidden" name="db_ma_san_pham[]" value="{$ct->ma_san_pham}" />
                    <input type="hidden" name="db_ten_san_pham[]"  value="{$ct->ten_san_pham}"/>
                    <input type="hidden" name="db_don_gia[]" value="{$ct->don_gia}" />
                    </td>
                    <td class="dauX" >X</td>
                    <td class="don_gia_san_pham">{$ct->don_gia|number_format}</td>
                    <td class="dau_remove" ><span class="hang-noi-dung-remove"><i class="fa fa-times-circle"></i></span></td>
 				</tr>          
                            
            {/foreach}
        </table>
        </div>
        <div class="right-middle">
          <label class="container-css">Mang về
          	{if $hoa_don->mang_ve neq ''}
            	<input type="checkbox" name="chk_mang_ve" value="Mang về" checked="checked">
            {else}
            	<input type="checkbox" name="chk_mang_ve" value="Mang về">
            {/if}
            <span class="checkmark"></span> </label>
        </div>
        <div class="right-bottom">
          <div class="tong">
            <div class="tien">
              <h3>Tổng</h3>
              <span>{$hoa_don->tong_tien|number_format} đ</span> </div>
            <div class="clear"></div>
          </div>
          <div class="luu_va_thanhtoan">
            <ul>
              <li> <a href="#">Lưu</a> </li>
              <div class="clear"></div>
            </ul>
          </div>
        </div>
        </form> 
      <!--  // Khi ở phần hóa đơn click xem hóa đơn-->
      {else}
      
      			<table id="hien_thi_tung_san_pham" width="100%" border="0" style="text-align:center">
      <!--<div id="hien_thi_tung_san_pham"></div>-->
		</table>
    </div>
    <div class="right-middle">
      <label class="container-css">Mang về
        <input type="checkbox" name="chk_mang_ve" value="Mang về">
        <span class="checkmark"></span> </label>
    </div>
    <div class="right-bottom">
      <div class="tong">
        
        <div class="clear"></div>
      </div>
      <div class="luu_va_thanhtoan">
        <ul>
          <li> <a href="javascript:document.getElementById('form_submit').submit()">Lưu</a> </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
    </form>
      
      {/if}
      
  </div>
  <div class="clear"></div>
</div>

</div>
