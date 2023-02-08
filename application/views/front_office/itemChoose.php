<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url(); ?>/assets/images/img_bg_2.jpg);">
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
					<span>Choose Item</span>
					<h2>Your Item.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<?php foreach($itemList as $item) { ?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(<?php echo base_url(); ?>/assets/sary/<?php echo $item->photo ?>);">
							<div class="inner">

								<p>
									<a href="<?php echo base_url('cobjet/insertEchange'); ?>/<?php echo $item->idObjet; ?>/<?php echo $idObj2; ?>/<?php echo $idPers2; ?>" class="icon"><i class="fa fa-paper-plane"></i></a>
									<a href="single.html" class="icon"><i class="si si-eye"></i></a>
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
