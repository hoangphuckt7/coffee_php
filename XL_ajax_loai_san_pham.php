<?php
include("models/m_san_pham.php");
$ma_loai=$_POST["ma_loai"];
$ma_ban=$_POST["ma_ban"];
$m_san_pham=new M_san_pham();
$ds_san_pham_theo_loai=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);

//echo "<pre>";
//print_r($ds_san_pham_theo_loai);
//echo "</pre>";
?>
<?php
foreach( $ds_san_pham_theo_loai as $san_pham)
{
?>
<div class="khung">
      	
        <a href="javascript:XL_san_pham(<?php echo $san_pham->ma_san_pham ?>,<?php echo $ma_ban ?>)">
          <div class="imgage"> 
          	<img src="public/images/<?php echo $san_pham->hinh ?>" alt=""> 
          </div>
          <span><?php echo $san_pham->ten_san_pham ?></span>
 		</a>
       </div>
<?php
}
?>