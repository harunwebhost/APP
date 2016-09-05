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
					  $currentpage=urldecode('view_users.php?show=Users&page1=district_users&id=district_user_id');
					/*get page header*/
					if(isset($_GET['show'])){
						$title=$_GET['show'];
					}else{
						$title="Total Leads";
					}
					if($title=="Users"){
						 $get_lead="SELECT * FROM district_users";
					}
				 ?>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><?php echo strtoupper($title); ?>  
					<a href="" class="pull-right small" data-toggle="modal" data-target="#myModal">
					<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>
					</a> </div>
					<div class="panel-body">
					<div class="responsive">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="lead_name" data-sortable="true">Name</th>
						        <th data-field="lead_email"  data-sortable="true">Email</th>
						        <th data-field="lead_mobile" data-sortable="true">City</th>
						        <th data-field="lead_city" data-sortable="true">Mobile</th>
						        <th data-field="edit" data-sortable="true">update</th>
						         <th data-field="edit" data-sortable="true">Delete</th>
						       

						    </tr>
						    </thead>
						    <?php 
						    	
						    	$execute=execute_sql_query($get_lead);
						    	while ($disp=execute_fetch($execute)) {
						    		
						    	?>
						    <tr data-index="0">
						    <td class="bs-checkbox">
						    <input data-index="0" name="toolbar1" type="checkbox"></td>
						    <td><?php echo $disp['district_name'];?></td>
						    <td><?php echo $disp['district_user_iemail'];?></td>
						    <td><?php echo $disp['district_user_city'];?></td>
						    <td><?php echo $disp['district_user_mobile'];?></td>
						    <td> <a href="edit_lead.php?edit_lead=<?php echo urldecode($disp['district_user_id'])?>">
						    <svg class="glyph stroked pencil">
						    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil">
						    </use>
						    </svg>
						    </a>  </td>
						    <td> <a href="
						    delete_opration.php?delete_id=<?php echo urldecode($disp['district_user_id']);?>&page=<?php echo $currentpage;?>" onclick="return confirm('you want to delete')">
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
			</div>
		</div><!--/.row-->			
	</div><!--/.main-->

	<?php require_once('create_users.php'); ?>


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
