<div class="content">
        <!--START menu-trong -->
        <div class="container-fluid">
        	
            <div class="fix">
                    <ul class="nav navbar-nav fix">
                        <li><a href="staff.php?var_hoa_don=1">Hóa đơn</a></li>
                        {foreach from=$ds_lau item=lau}
                        <li><a href="staff.php?ma_lau={$lau->ma_lau}">{$lau->ten_lau}</a></li>
                        {/foreach}
                    </ul>
            	</div>
            
        </div>
        <!--END menu-trong -->

        <div class="container-fluid">
        
        	{if $var_hoa_don eq 1}
            	<div class="wrapper-hoa_don">
                	{foreach from=$ds_hoa_don_chua_thanh_toan item=hoa_don_chua_thanh_toan}
                    <div class="hoadon">
                        <div class="tieu_de_hoa_don">
                            <span>{$hoa_don_chua_thanh_toan->ten_ban}</span>
                        </div>
                        <div class="noidung_hoa_don">
                            <div class="dong">Ngày:{$hoa_don_chua_thanh_toan->ngay}</div>
                            <div class="dong">
                            	{if $hoa_don_chua_thanh_toan->mang_ve eq ''}
                                	<span class="mang_ve"><b>Dùng tại quán</b></span>
                                {else}
                                	<span class="mang_ve"><b>{$hoa_don_chua_thanh_toan->mang_ve}</b></span>
                                {/if}
                                
                                
                                <span class="gia">{$hoa_don_chua_thanh_toan->tong_tien|number_format} đ</span>
                            </div>
                            <div class="dong">
                                <ul>
                                    <li class="hien_phan_thanh_toan"><a href="javascript:XL_hien_hoa_don({$hoa_don_chua_thanh_toan->ma_hoa_don})">Thanh Toán</a></li>
                                    <li><a href="menu.php?ma_hoa_don={$hoa_don_chua_thanh_toan->ma_hoa_don}">Xem hóa đơn</a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {/foreach}
				</div>
            {else}
            	
                 <div class="cho_ngoi">
                <ul>
                	{foreach from=$ds_ban_theo_lau item=ban}
                    {if $ban->trang_thai eq 1}
                    	<li><a class="tt{$ban->trang_thai}" href="javascript:alert('Bàn này đã có người!!')">{$ban->ten_ban}</a></li>
                    {else}
                    	<li><a href="menu.php?ma_ban={$ban->ma_ban}">{$ban->ten_ban}</a></li>
                    {/if}
                    {/foreach}
                    <div style="clear: both;"></div>;
                </ul>
                <div style="clear: both;"></div>
            </div>
                
            {/if}
            
           
        </div>
    </div>
<div class="thanh_toan_" >
<p id="close_thanh_toan"><i class="fa fa-times"></i></p>
<form action="XL_thanh_toan.php" method="post" id="form_thanh_toan">
<div id="hien_thi_phieu_in_va_thanh_toan">
    
</div>
</form>
</div>
<div class="xam"></div>