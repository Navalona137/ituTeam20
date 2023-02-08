	<style>
		.form-search {
			height: 53px;
			border-radius: 5px;
			margin-left: 5px;
		}
		.form-input {
			margin-left: 5px;
		}
	</style>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url(); ?>/assets/images/lampe.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Exchange</h1>
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
					<span>Cool Stuff</span>
					<h2>Publishing.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="row col-md-12" style="padding-bottom: 1%;">
					<form class="form-inline" action="<?php echo base_url('cobjet/recherche'); ?>">
						<div class="form-group">
							<input type="text" name="nom" class="form-control" placeholder="Search...">
						</div>
						<div class="form-group">
							<select name="categorie" id="disabledSelect" class="form-control form-input" style="height: 55px;">
								<option value="1"> Choose Category </option>
								<option value="1"> Electronic </option>
								<option value="2"> Vehicule </option>
								<option value="3"> Fourniture </option>
								<option value="4"> Vetements </option>
								<option value="5"> Accessoire </option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary form-search">Search</button>
					</form>
				</div>
				<div class="row col-md-12">
					<?php 
					foreach($itemList as $item) { ?>
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
								<span class="price" style="font-size: 0.8em;"><?php echo $item->nom; ?> (<?php echo $item->prix; ?>$)</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				
			</div>
		</div>
	</div>
