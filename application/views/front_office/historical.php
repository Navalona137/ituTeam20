<style>
	.request-box {
		padding-top: 1%;
		padding-bottom: 1%;
		margin-top: 1%;
		background-color: #d1d0ca46;
	}
	.register-list {
		border-right: 1px solid black;
		padding-left: 5%;
		padding-right: 5%;
	}
</style>
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url(); ?>/assets/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Historical</h1>
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
					<span>List Item</span>
					<h2>Register.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<?php foreach($echangeList as $echange) { ?>
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;">
						<img src="<?php echo base_url(); ?>/assets/sary/<?php echo $echange->photo1; ?>" style="height: 70px"/>
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.5em;">
						<span ><?php echo $echange->prenom1; ?></span>
					</div>
					<div class="col-md-2" >
						<span >Receipt : <?php echo $echange->dateEchange; ?></span>
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<span ><?php echo $echange->prenom2; ?></span>
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;">
						<img src="<?php echo base_url(); ?>/assets/sary/<?php echo $echange->photo2; ?>" style="height: 70px"/>					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
