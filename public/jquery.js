$(document).ready(function() {
    //activeclass chi_tiet_thuc_uong
    $('.khung').click((e)=>{
        $('.gray').addClass("active_gray");
        $('.chitiet__thuc_uong').addClass("active_chitiet__thuc_uong");
		var a = $(e.currentTarget).children("div:first").attr('href');
    })

    //removeclass chi_tiet_thuc_uong
    $('#themvao').click(function() {
        $('.chitiet__thuc_uong').removeClass("active_chitiet__thuc_uong");
        $('.gray').removeClass("active_gray");
    })

    $('#thoat_chi_tiet').click(function() {
        $('.chitiet__thuc_uong').removeClass("active_chitiet__thuc_uong");
        $('.gray').removeClass("active_gray");
    })

    //activeclass và removeClass don_gia
    var kt = 0;
    $('.don_gia').click(function() {

        if (kt % 2 == 0) //active
        {
            $('.don_gia').addClass("don_gia_active");
        } else //remove
        {
            $('.don_gia').removeClass("don_gia_active");
        }
        kt++;
    })
    var t = 0
    $('.don_gia_1').click(function() {
        if (t % 2 == 0) //active
        {
            $('.don_gia_1').addClass("don_gia_active");
        } else //remove
        {
            $('.don_gia_1').removeClass("don_gia_active");
        }
        t++;
    })

    var k = 0
    $('.don_gia_2').click(function() {
        if (k % 2 == 0) //active
        {
            $('.don_gia_2').addClass("don_gia_active");
        } else //remove
        {
            $('.don_gia_2').removeClass("don_gia_active");
        }
        k++;
    })


});



$(document).ready(function() {
    $(document).on('click', '.hang-noi-dung-remove', (e)=>{
		((((e.target).parentElement).parentElement).parentElement).remove();
		//console.log((((e.target).parentElement).parentElement).parentElement)
	})
});



//jquery cho phần hiện/ẩn thanh toán
$(document).ready(function() {
    $('.hien_phan_thanh_toan').click(function(){
		$('.xam').addClass('active_xam');
		$(".thanh_toan_").addClass("active_");
	});
	
	
	$('#close_thanh_toan i').click(function() {
        $(".thanh_toan_").removeClass("active_");
		$('.xam').removeClass('active_xam');
    });
	
	$('.luu_va_thanhtoan.thanh_toan ul li').click(function() {
        $(".thanh_toan_").removeClass("active_");
		$('.xam').removeClass('active_xam');
    });
});





