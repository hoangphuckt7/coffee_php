<div id="main-content"> <!-- Main Content Section with everything -->
			
			
			<!-- Page Head -->
			<h2>Xin chào,{$smarty.session.fullname}</h2>
			<p id="page-intro">Quản trị viên</p>
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				 <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					{if isset($view)}
                    	{include file="$view"}
                    {/if}     
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
           
			{include file="footer.tpl"}
			<!-- End #footer -->
			
		</div>