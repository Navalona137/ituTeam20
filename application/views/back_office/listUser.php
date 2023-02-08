<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url(); ?>/assets/images/lampe.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>User</h1>
							<h2>Free html5 templates by <a href="https://themewagon.com/theme_tag/free/" target="_blank">Themewagon</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Person</span>
					<h2>User List</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row" style="display: ">
				<table class="table table-striped">
					<tr>
						<th> IdUser </th>
						<th> Name </th>
						<th> Firstname </th>
						<th> Birthday </th>
						<th> Sexe </th>
					</tr>
				<?php foreach($userList as $user) { ?>
					<tr>
						<td> <?php echo($user->idPersonne); ?> </td>
						<td> <?php echo($user->nom); ?> </td>
						<td> <?php echo($user->prenom); ?> </td>
						<td> <?php echo($user->dtn); ?> </td>
						<td> <?php echo($user->sexe); ?> </td>
                    </tr>
				<?php } ?>
				</table> 
			</div>
		</div>
	</div>
	<div id="" style="padding-bottom: 5%;">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Person</span>
					<h2>Statistic</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row col-md-6" style="display: ">
				<table class="table table-striped">
					<tr>
						<th> Count membres </th>
						<td> <?php echo count($userList); ?> </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
