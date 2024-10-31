<?php
class Pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}
	
	
	function pageList($curpage, $pages)
	{
		$page_list="";
			if(($curpage!=1)&&($curpage))
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=1\" title=\"Trang đầu\"><<</a></span>";
			}
			if(($curpage-1)>0)
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\" title=\"Về trang trước\"><</a></span>";
			}
			/*if($curpage>2)
				$page_list.="...";*/
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.='<span class="div_trang">'."<b class='number'>".$i."</b></span>";
					}
					else
					{
						$page_list.='<span class="div_trang">'."<a class='number' href ='".$_SERVER['PHP_SELF']."?page=".$i."' title='Trang ".$i."'>".$i."</a></span>";
					}
				}

			/*if(($curpage+2)<$pages)
				$page_list.="...";*/

			
			if(($curpage+1)<=$pages)
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\" title=\"Đến trang sau\">></a></span>";
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".$pages."\" title=\"Đến trang cuối\">>></a></span>";
			}
			return $page_list;
	}
}
?>