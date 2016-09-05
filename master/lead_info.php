<?php require_once('../webtemplate/headtags.php'); ?>
<?php require_once('../webtemplate/header_nav.php'); ?>
<?php require_once('../webtemplate/side_navigation.php'); ?>  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			
		</div><!--/.row-->
				
				<?php 
					/*get page header*/
					if(){
						
					}
				 ?>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Advanced Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="id" data-sortable="true">Name</th>
						        <th data-field="email"  data-sortable="true">Email</th>
						        <th data-field="mobile" data-sortable="true">Mobile</th>
						        <th data-field="address" data-sortable="true">Address</th>
						        <th data-field="source" data-sortable="true">Source</th>
						        <th data-field="source" data-sortable="true">Distric Name</th>
						        <th data-field="edit" data-sortable="true">Action</th>

						    </tr>
						    </thead>
						    <?php 
						    	$get_lead="SELECT * FROM app_leads";
						    	$execute=execute_sql_query($get_lead);
						    	while ($disp=execute_fetch($execute)) {
								?>
						    <tr data-index="0">
						    <td class="bs-checkbox">
						    <input data-index="0" name="toolbar1" type="checkbox"></td>
						    <td><?php echo $disp['lead_name'];?></td>
						    <td><?php echo $disp['lead_email'];?></td>
						    <td><?php echo $disp['lead_mobile'];?></td>
						    <td><?php echo $disp['lead_address'];?></td>
						    <td><?php echo $disp['source_of_lead'];?></td>
						    <td><?php echo $disp['district_name'];?></td>
						    <td> <a href="">
						    <svg class="glyph stroked pencil small">
						    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil">
						    </use>
						    </svg>
						    </a>  </td>
						    </tr>
						    <?php }?>	

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
		
	</div><!--/.main-->

	<?php require_once('../webtemplate/footer.php'); ?> 
	<script src="../tempfiles/js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
