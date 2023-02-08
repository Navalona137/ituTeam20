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
	.accept {
		color: rgb(7, 130, 62, 0.8);
	}
	.refuse {
		color:rgba(112, 20, 20, 0.8);
	}
</style>
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url(); ?>/assets/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Request</h1>
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
					<div class="col-md-5" style="padding-top: 2%;">
						<span class="register-list">Receipt : <?php echo $echange->dateEchange; ?></span>
						<span class="register-list">Owner : someone</span>
					</div>
					<div class="col-md-1">
						<img src="<?php echo base_url(); ?>/assets/sary/<?php echo $echange->photo1; ?>" style="height: 70px"/>
					</div>
					<div class="col-md-1" style="padding-top: 1.5%;font-size: 1.6em;">
						<i class="fa fa-angle-double-right"></i>
					</div>
					<div class="col-md-2">
						<img src="<?php echo base_url(); ?>/assets/sary/<?php echo $echange->photo2; ?>" style="height: 70px"/>
					</div>
					<div class="col-md-1 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;">
						<a href="<?php echo base_url('cobjet/acceptEchange'); ?>/<?php echo $echange->idEchange; ?>/<?php echo $echange->idObjet1; ?>/<?php echo $echange->idObjet2; ?>/<?php echo $echange->idPersonne1; ?>" class="accept"> 
							<i class="fa fa-check"></i>
						</a>
					</div>
					<div class="col-md-1" style="padding-top: 1.5%;font-size: 1.2em;">
						<a href="<?php echo base_url('cobjet/deleteEchange'); ?>/<?php echo $echange->idEchange; ?>" class="refuse"> 
							<i class="fa fa-times"></i> 
						</a>
					</div>
				</div>
				<?php } ?>
				<?php if(count($echangeList) == 0) { ?>
					<div class="col-md-12 text-center request-box">
						<div class="" style="padding: 2%;">
							<em>List Empty ...</em>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Suggestion</span>
					<h2>Proposition.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<?php foreach($itemList as $item) { ?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(<?php echo base_url(); ?>/assets/sary/<?php echo $item->photo; ?>);">
							<div class="inner">
								<p>
									<a href="<?php echo base_url('cobjet/itemList'); ?>/<?php echo $item->idObjet; ?>/<?php echo $item->idPersonne; ?>" class="icon"><i class="fa fa-sync"></i></a>
									<a href="#" class="icon"><i class="si si-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html"><?php echo $item->description; ?></a></h3>
							<span class="price" style="font-size: 0.8em;"><?php echo $item->nom; ?></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>

