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
							<h1>Form</h1>
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
					<span>New Item</span>

					<h2>Entry.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<form action="<?php echo base_url(); ?>/cobjet/modifyItem" method="post">
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;"></div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.5em;">
						<span >Category</span>
					</div>
					<div class="col-md-2" >
						<span ></span>
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<select name="categorie">
							<option value="">Categorie</option>
							<?php foreach($categorieList as $cat){  ?>
								<option value="<?php echo $idCategorie; ?>"><?php echo $cat->nom ?></option>
							<?php } ?>	
						</select>
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;"></div>
				</div>
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;"></div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.5em;">
						<span >Name</span>
					</div>
					<div class="col-md-2" >
						<span ></span>
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<input type="text" name="nom" value="<?php echo $nom; ?>" />
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;"></div>
				</div>
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;"></div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.5em;">
						<span >Picture</span>
					</div>
					<div class="col-md-2" >
						<span ></span>
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<input type="text" name="photo" placeholder="Name of picture" value="<?php echo $photo; ?>" />
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;"></div>
				</div>
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;"></div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.5em;">
						<span >Price</span>
					</div>
					<div class="col-md-2" >
						<span ></span>
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<input type="number" name="prix" value="<?php echo $prix; ?>" />
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;"></div>
				</div>
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;"></div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.5em;">
						<span >Description</span>
					</div>
					<div class="col-md-2" >
						<span ></span>
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<input type="text" name="description" value="<?php echo $description; ?>" />
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;"></div>
				</div>
				<div class="col-md-12 text-center request-box">
					<div class="col-md-2" style="padding-top: 2%;"></div>
					<div class="col-md-2 col-md-offset-1"></div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
						<input type="submit" value="Valider" />  
					</div>
					<div class="col-md-2" style="padding-top: 1.5%;font-size: 1.5em;">
					</div>
					<div class="col-md-2 col-md-offset-1" style="padding-top: 1.5%;font-size: 1.2em;"></div>
				</div>
				</form>
			</div>
		</div>
	</div>
	
