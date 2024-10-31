// JavaScript Document

function XL_san_pham(ma_san_pham,ma_ban)
{
	
	
	
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","XL_san_pham.php");
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.status==200 && xmlhttp.readyState==4)
		{
			var x=xmlhttp.responseText;
			
			
				
				//console.log(x);
				
	     		var arr = x.split("|")
				//console.log(arr[1]);
				var divs = document.getElementsByClassName('hang');
					//console.log(divs)
					
				for(var i = 0; i <divs.length; i++)
				{
					var attr_first = (divs[i].getAttribute("idx"));
					//console.log(attr_first);
					
					if(attr_first == arr[1])
					{
						divs[i].getElementsByTagName('input')[0].value = parseInt(divs[i].getElementsByTagName('input')[0].value) + 1;
						
						return;
					}
					
				}
				$('#hien_thi_tung_san_pham').append(x);
				
				
				//console.log(a);
		}	
	}
	
	var data=new FormData();
	data.append("ma_san_pham",ma_san_pham);
	xmlhttp.send(data);
	
	
}


function XL_loai_san_pham(ma_loai,ma_ban)
{
	if(ma_ban == 0)
	{
		alert("Vui lòng chọn bàn trước!");	
	}
	
	var x=document.getElementById('hien_thi_san_pham_theo_loai_san_pham');
	
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","XL_ajax_loai_san_pham.php");
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.status==200 && xmlhttp.readyState==4)
		{
			x.innerHTML=xmlhttp.responseText;	
		}	
	}
	var data=new FormData();
	data.append("ma_loai",ma_loai);
	data.append("ma_ban",ma_ban);
	xmlhttp.send(data);
}


function XL_hien_hoa_don(ma_hoa_don)
{
	var xmlhttp= new XMLHttpRequest();
	xmlhttp.open("POST","XL_ajax_hien_hoa_don.php")	;
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.status==200  && xmlhttp.readyState==4)
		{
			document.getElementById("hien_thi_phieu_in_va_thanh_toan").innerHTML=(xmlhttp.responseText);	
		}	
	}
	var data=new FormData();
	data.append("ma_hoa_don",ma_hoa_don);
	xmlhttp.send(data);
}

function XL_tien_thua(gt_nhap,ma_hoa_don)
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","XL_ajax_tien_thua.php");
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.status==200  && xmlhttp.readyState==4)
		{
			document.getElementById("tien_thua").innerHTML=(xmlhttp.responseText);
		}
	}
	var data=new FormData();
	data.append("gt_nhap",gt_nhap);
	data.append("ma_hoa_don",ma_hoa_don);
	xmlhttp.send(data);
}


