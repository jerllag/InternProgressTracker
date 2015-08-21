<?php include("header.php"); ?>
  
<div class="container">
	<section class="page-header" id="content">
		<div class="row">
			<div class="col-lg-12">
				<h2 align="center"> Leaderboard </h2>
			</div>
		</div>
	</section>
	
	<div class="row">
		<div class="col-lg-12"></div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th class="col-lg-2"> Photo </th>
					<th class="col-lg-4"> Intern </th>
					<th class="col-lg-6"> Progress </th>
				</tr>
			</thead>
			
			<tbody>
			<tr class="info">
				<td class="col-lg-3">
					<img src="images/users/brian.png" class="img-circle" width="40%">
				</td>
				<td class="col-lg-3">
					<h4>Brian B. Caldona </h4>
					<h5>Expert Global Solutions (Marikina Site) </h5>
				</td>
				<td class="col-lg-3">
					<div class="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
							70% Complete
						</div>
					</div>
				</td>
			</tr>
			<!---remove, replace with loop from retrieving from db, LAYOUT PURPOSES ONLY-->
			<tr>
				<td class="col-lg-3">
					<img src="images/users/karen.png" class="img-circle" width="40%">
				</td>
				<td class="col-lg-3">
					<h4>Karen Marie E. Igcasan</h4>
					<h5>Technomancer</h5>
				</td>
				<td class="col-lg-3">
					<div class="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
							50% Complete
						</div>
					</div>
				</td>
			</tr>
			
			<tr>
				<td class="col-lg-3">
					<img src="images/users/marnie.jpg" class="img-circle" width="40%">
				</td>
				<td class="col-lg-3">
					<h4>Marnie Bright R. Palapar</h4>
					<h5>ACS Technologies Ltd.</h5>
				</td>
				<td class="col-lg-3">
					<div class="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
							30% Complete
						</div>
					</div>
				</td>
			</tr>
			<!---end here-->
				
				
				
			</tbody>
		</table>
	</div>
</div>

<?php include("footer.php"); ?>