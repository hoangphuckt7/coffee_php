// JavaScript Document
function In()
{
	var noidung=document.getElementById("in").innerHTML;
	
	//console.log(noidung);
	var mywindow = window.open('', 'PRINT', 'height=500,width=700');

    mywindow.document.write(noidung);
    
    mywindow.document.close();
    //mywindow.focus();
	
    mywindow.print();
    mywindow.close();	
}