<!--START NAV -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">...</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="staff.php">HÓA ĐƠN</a></li>
                {foreach from=$ds_loai_san_pham item=loai}
                {if (!isset($ma_ban))}
                <li><a href="javascript:XL_loai_san_pham({$loai->ma_loai},0)">{$loai->ten_loai}</a></li>
                {else}
                <li><a href="javascript:XL_loai_san_pham({$loai->ma_loai},{$ma_ban})">{$loai->ten_loai}</a></li>
                {/if}
                {/foreach}
            </ul>
            <ul class="nav navbar-nav navbar-right">
            	<li><h4><i class="fa fa-user-circle"></i>Chào,{$smarty.session.fullname}</h4></li>
                <li><a href="dang_xuat.php"><i class="fa fa-sign-out" style="color: white">Đăng Xuất</i></a></li>
            </ul>
        </div>
    </nav>
    <!--END NAV -->