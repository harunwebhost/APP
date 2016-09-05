	<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Lead Information 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="upload_lead.php">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Upload Leads
						</a>
					</li>
					<li>
						<a class="" href="lead_info.php">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Total Leads
						</a>
					</li>
					<li>
						<a class="" href="lead_info.php?show=<?php echo urlencode("assigned");?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Assigned
						</a>
					</li>

						<li>
						<a class="" href="lead_info.php?show=<?php echo urlencode("un-assigned");?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Un-Assinged
						</a>
					</li>
					
				</ul>
			</li>
			

				<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#Campains"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Campains 
				</a>
				<ul class="children collapse" id="Campains">
					<li>
						<a class="" href="campain_leads.php?show=<?php echo urlencode('main');?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Main Data 
						</a>
					</li><li>
						<a class="" href="campain_leads.php?show=<?php echo urlencode('Internal');?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Internal Campaign 
						</a>
					</li>
					<li>
						<a class="" href="campain_leads.php?show=<?php echo urlencode('Cause');?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Cause Campaign  
						</a>
					</li>
					
					
				</ul>
			</li>


			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#users"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Create Users 
				</a>
				<ul class="children collapse" id="users">
					<li>
						<a class="" href="view_users.php?show=<?php echo urlencode('Users');?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Users  
						</a>
					</li>
					
					
				</ul>
			</li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#districtdetails"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>District Details 
				</a>
				<ul class="children collapse" id="districtdetails">
					<li>
						<a class="" href="view_districs.php?show=<?php echo urlencode('Districts');?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Districs  
						</a>
					</li>
					<li>
						<a class="" href="assemblislist.php?show=<?php echo urlencode('assemblis');?>">
							<svg class="glyph stroked chevron-right">
							<use xlink:href="#stroked-chevron-right"></use></svg>
							 Assemblis List
  
						</a>
					</li>
					
				</ul>
			</li>